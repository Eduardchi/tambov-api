<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $data = $request->validated();
        $data['ip_address'] = $request->ip();

        ContactMessage::create($data);

        // Отправка email администратору
        try {
            Mail::raw(
                "Имя: {$data['name']}\nТелефон: {$data['phone']}\nВопрос: {$data['message']}",
                function ($message) {
                    $message->to(env('ADMIN_EMAIL', 'togbu_dmto@mail.ru'))
                            ->subject('Новое обращение — Служба заботы');
                }
            );
        } catch (\Exception $e) {
            // Логируем, но пользователю всё равно отвечаем успехом
            \Log::error('Email sending failed: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Запрос отправлен. Мы свяжемся с вами в ближайшее время.'
        ]);
    }
}