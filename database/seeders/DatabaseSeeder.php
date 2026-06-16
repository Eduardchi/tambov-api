<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\GalleryAlbum;
use App\Models\News;
use App\Models\Photo;
use App\Models\SupportProgram;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $news  = '/images/Фотографии на сайт/Раздел новости/';
        $evts  = '/images/Фотографии на сайт/Раздел Мероприятия региона/Мероприятия/';
        $sup   = '/images/Фотографии на сайт/Раздел меры поддержки/';

        // ── News ─────────────────────────────────────────────────────────────
        News::create([
            'id'          => 'news-001',
            'title'       => 'В Тамбове растянули 300-метровую георгиевскую ленту',
            'date'        => '2026-05-09',
            'category'    => 'Патриотизм',
            'description' => 'В сквере имени Зои Космодемьянской прошла масштабная акция-флешмоб «Георгиевская лента»: активисты Волонтёрской Роты развернули трёхсотметровую георгиевскую ленту в память о героизме советского народа в годы Великой Отечественной войны.',
            'image_url'   => $news . 'В Тамбове растянули 300-метровую георгиевскую ленту.jpg',
        ]);

        News::create([
            'id'          => 'news-002',
            'title'       => 'Гала-концерт XXXI фестиваля «Студенческая весна» состоялся в Тамбовской области',
            'date'        => '2026-05-20',
            'category'    => 'Культура',
            'description' => 'Финал Регионального фестиваля самодеятельного студенческого творчества прошёл на сцене Тамбовского академического драматического театра.',
            'image_url'   => $news . 'Гала-концерт.jpg',
        ]);

        News::create([
            'id'          => 'news-003',
            'title'       => 'Завершился Тамбовский молодёжный форум «Дружба народов»',
            'date'        => '2026-06-10',
            'category'    => 'Молодёжь',
            'description' => 'Для участников была организована иммерсивная экскурсия «Город историй» по маршруту «Исторический Тамбов».',
            'image_url'   => $news . 'Завершился Тамбовский молодежный форум «Дружба народов»!.jpg',
        ]);

        // ── Events ───────────────────────────────────────────────────────────
        Event::create([
            'id'          => 'evt-001',
            'title'       => 'День молодёжи — 2026 в Тамбове',
            'date'        => '2026-06-27',
            'location'    => 'Тамбов',
            'category'    => 'Культура',
            'image_url'   => $evts . 'День молодёжи 2026 - регистрация.jpg',
            'description' => 'Стартовала регистрация на масштабное молодёжное событие: концерты, спортивные активности, встречи с экспертами и интерактивные площадки в Олимпийском парке.',
        ]);

        Event::create([
            'id'          => 'evt-002',
            'title'       => 'Творческий конкурс на главной молодёжной сцене',
            'date'        => '2026-06-27',
            'location'    => 'Тамбов',
            'category'    => 'Культура',
            'image_url'   => $evts . 'кастинг молодых талантов.jpg',
            'description' => 'Уникальный шанс зажечь на главной молодёжной сцене для участников от 14 до 35 лет. 27 июня с 17:00 до 22:00 в Олимпийском парке.',
        ]);

        Event::create([
            'id'          => 'evt-003',
            'title'       => 'Встреча с двукратным олимпийским чемпионом Романом Власовым',
            'date'        => '2026-05-28',
            'location'    => 'Тамбов',
            'category'    => 'Спорт',
            'image_url'   => $evts . 'Встреча с Романом Власовым 1.jpg',
            'description' => 'Встреча с выдающимся российским борцом греко-римского стиля в Доме молодёжи Тамбовской области. 28 мая в 16:00.',
        ]);

        Event::create([
            'id'          => 'evt-004',
            'title'       => 'Международная Премия #МЫВМЕСТЕ — 6 сезон',
            'date'        => '2026-07-01',
            'location'    => 'Тамбов',
            'category'    => 'Волонтёрство',
            'image_url'   => $evts . 'Премия #МЫВМЕСТЕ.jpg',
            'description' => 'Участвуй в 6 сезоне Международной Премии #МЫВМЕСТЕ! В Год Единства народов России премия сфокусирована на проектах, объединяющих людей разных регионов и культур.',
        ]);

        Event::create([
            'id'          => 'evt-005',
            'title'       => 'Иммерсивная экскурсия с тамбовской казначейшей Авдотьей Николаевной',
            'date'        => '2026-06-15',
            'location'    => 'Тамбов',
            'category'    => 'Культура',
            'image_url'   => $evts . 'Иммерсивная экскурсия.jpg',
            'description' => 'Погрузитесь в историю Тамбова: секреты культурных жемчужин, легенды и интересные факты о зданиях и людях, оставивших след в судьбе города.',
        ]);

        // ── Support programs ─────────────────────────────────────────────────

        // 14–18 лет — Школьники
        SupportProgram::create([
            'id'          => 'sup-014-1',
            'title'       => 'Конкурс «Большая перемена»',
            'category'    => 'Гранты',
            'audience'    => '14–18 | Школьникам 8–11 классов',
            'deadline'    => '2026-10-01',
            'description' => 'Всероссийский конкурс для школьников, участники которого могут выиграть грант на образование до 1 млн рублей, а их классные руководители — 150 тыс. рублей.',
            'image_url'   => $sup . 'Стипендии и гранты студентам.jpg',
        ]);

        SupportProgram::create([
            'id'          => 'sup-014-2',
            'title'       => 'Профориентация «Билет в будущее»',
            'category'    => 'Обучение',
            'audience'    => '14–18 | Учащимся 6–11 классов',
            'deadline'    => null,
            'description' => 'Федеральный проект по ранней профессиональной ориентации: пробные занятия на реальных рабочих местах, онлайн-диагностика и встречи с работодателями.',
            'image_url'   => $sup . 'Обучение.jpg',
        ]);

        SupportProgram::create([
            'id'          => 'sup-014-3',
            'title'       => 'Молодёжный грант Тамбовской области',
            'category'    => 'Гранты',
            'audience'    => '14–18 | Школьникам с идеями социальных проектов',
            'deadline'    => '2026-09-15',
            'description' => 'Региональный грантовый конкурс для авторов социальных, культурных и экологических инициатив. Размер гранта — до 100 тыс. рублей.',
            'image_url'   => $sup . 'Стипендии и гранты студентам.jpg',
        ]);

        // 18–22 лет — Студенты
        SupportProgram::create([
            'id'          => 'sup-022-1',
            'title'       => 'Стипендия губернатора Тамбовской области',
            'category'    => 'Стипендии',
            'audience'    => '18–22 | Студентам вузов с отличной успеваемостью',
            'deadline'    => '2026-09-01',
            'description' => 'Ежемесячная стипендия для лучших студентов тамбовских вузов и ссузов: 3 000–5 000 рублей в месяц за высокую успеваемость и активную общественную жизнь.',
            'image_url'   => $sup . 'Стипендии и гранты студентам.jpg',
        ]);

        SupportProgram::create([
            'id'          => 'sup-022-2',
            'title'       => 'Студенческий стартап',
            'category'    => 'Гранты',
            'audience'    => '18–22 | Студентам с технологическими идеями',
            'deadline'    => '2026-08-01',
            'description' => 'Федеральный конкурс Фонда содействия инновациям: грант 1 млн рублей на реализацию технологической или творческой бизнес-идеи в период обучения.',
            'image_url'   => $sup . 'Стипендии и гранты студентам.jpg',
        ]);

        SupportProgram::create([
            'id'          => 'sup-022-3',
            'title'       => 'Арендный дом ТГУ им. Г. Р. Державина «Там, где уютно»',
            'category'    => 'Жильё',
            'audience'    => '18–22 | Студентам ТГУ им. Державина',
            'deadline'    => null,
            'description' => 'Уютные квартиры комфорт-класса на кампусе: от 9 тыс. руб/мес. Субсидии 50% для семей с одним ребёнком, 100% — с двумя и более.',
            'image_url'   => $sup . 'Жильё.jpg',
        ]);

        SupportProgram::create([
            'id'          => 'sup-022-4',
            'title'       => 'Содействие занятости и стажировки',
            'category'    => 'Трудоустройство',
            'audience'    => '18–22 | Студентам старших курсов',
            'deadline'    => null,
            'description' => 'Региональная программа трудоустройства студентов: временные рабочие места, субсидируемые стажировки у партнёров-работодателей Тамбовской области.',
            'image_url'   => $sup . 'Практика, стажировка и карьера.jpg',
        ]);

        // 23–35 лет — Молодые взрослые
        SupportProgram::create([
            'id'          => 'sup-035-1',
            'title'       => 'Гранты для молодых учёных',
            'category'    => 'Гранты',
            'audience'    => '23–35 | Аспирантам и молодым учёным',
            'deadline'    => '2026-09-01',
            'description' => 'Областной конкурс грантов для поддержки молодых исследователей: до 500 тыс. рублей на проведение научно-практических исследований и публикацию результатов.',
            'image_url'   => $sup . 'Стипендии и гранты студентам.jpg',
        ]);

        SupportProgram::create([
            'id'          => 'sup-035-2',
            'title'       => 'Программа «Земский учитель»',
            'category'    => 'Трудоустройство',
            'audience'    => '23–35 | Педагогам, переезжающим в сельские школы',
            'deadline'    => null,
            'description' => 'Единовременная компенсационная выплата 1 млн рублей при трудоустройстве в сельскую или малокомплектную школу. Действует по всей России, включая Тамбовскую область.',
            'image_url'   => $sup . 'Практика, стажировка и карьера.jpg',
        ]);

        SupportProgram::create([
            'id'          => 'sup-035-3',
            'title'       => 'Льготная ипотека для молодых семей',
            'category'    => 'Жильё',
            'audience'    => '23–35 | Семьям с детьми до 35 лет',
            'deadline'    => null,
            'description' => 'Государственная программа «Семейная ипотека» со ставкой до 6% годовых. Первоначальный взнос — от 20%. Действует на новостройки и индивидуальное жилищное строительство.',
            'image_url'   => $sup . 'Молодые семьи.jpg',
        ]);

        // ── Gallery ──────────────────────────────────────────────────────────
        // cover_url — превью Яндекс.Диска (подписанные URL, обновить при истечении через migrate:fresh --seed)
        // yandex_disk_url — прямая ссылка на папку внутри публичного хранилища

        GalleryAlbum::create([
            'id'              => 'album-001',
            'title'           => 'Студенческая весна — Гала-концерт 2025',
            'date'            => '2025-05-22',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/1977c1dd46107fac97f5750c40cdb3b8f9a8b98e283794a103cfd191a1dcc50d/6a3179b2/Xa39_uhpq-V-Esr-NFwgRJ470mPU-swfI4cgOsmhFO6nGulS67A94rvLPJbHtYubngp-55SnRK5QfTg-FiaG7Q%3D%3D?uid=0&filename=DSC_0994.JPG&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/Студвесна. Гала-концерт в Тамбове 2025',
        ]);

        GalleryAlbum::create([
            'id'              => 'album-002',
            'title'           => 'Форум «Дружба народов» — 2025',
            'date'            => '2025-06-10',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/21a92cc41a2195c6f0617c78e5d611fd599cac4ffea4f7453e0666a1c0b910c7/6a317997/mMhavIZPUWMXGDWzO3q1ecSF5qMum3kQa--Sh2ivtdur334AgVIwkMxvahJ0AfPBRqZ7bn-5MGBGZ-UlSOWwbQ%3D%3D?uid=0&filename=DSC_3371.JPG&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/Форум Дружба народов 2025',
        ]);

        GalleryAlbum::create([
            'id'              => 'album-003',
            'title'           => 'День молодёжи в Тамбове — 2025',
            'date'            => '2025-06-27',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/7fe19cbc1e8b234c2619601eb6831f4c9077c13942a1b4d9f6a1408a17115abf/6a317a85/2V0zILnAsz4fziLsEVnFbgBMs7qmZVBfdysYPDcUUJcshb92739VZVQgEm_0FkDa-t_IksTbDZjd9Rjsc7bDZw%3D%3D?uid=0&filename=DSC_3381.jpg&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/День молодёжи в Тамбове 2025',
        ]);

        GalleryAlbum::create([
            'id'              => 'album-004',
            'title'           => 'Форум «Тамбовпатриот» — 2025',
            'date'            => '2025-11-13',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/ec3a162dcefad5e68f26a9c9d8bedf76899ee4c5118566f5382e9883730db5df/6a317a36/YEi157M6nUOyA5hz_y39UriRSjEbvrgdJ20087l-j7Uz-it_ttjAHVzknviG2EwUNMsrxbx0PCHYk1sXrlaw3Q%3D%3D?uid=0&filename=13.11.25-11.jpg&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/Форум Тамбовпатриот 2025',
        ]);

        GalleryAlbum::create([
            'id'              => 'album-005',
            'title'           => 'Открытие Года единства народов России — 2026',
            'date'            => '2026-01-10',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/3a3042525b600c744995b93411a2092d0894dc4240a804d916bc9e8b149dc766/6a317a37/Xnz4HXwgPr3rUM_IZML9KO9vnV06PRz3YmVr7oCJZphVPe54YJAsJzwIhPDhU618cTurSy6oDOi0tDkkqNWv0Q%3D%3D?uid=0&filename=DSC_7204.JPG&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/Открытие Года единства народов России 2026',
        ]);

        GalleryAlbum::create([
            'id'              => 'album-006',
            'title'           => 'Добро.Слёт — 2025',
            'date'            => '2025-09-15',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/91d1703fc57257df776878372b71e00edf431a7dbc449fdc3a03e526a60e7dfe/6a317a3f/IE_eUfQXXCzkEqLYvP8qSFt8LMGadP-v16R072E5GuqThym00-r7fDpBnw2GmSXXmR03VDOCI23M9tOqgpnJCQ%3D%3D?uid=0&filename=DSC_5365.JPG&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/Форум Добро.Слёт 2025',
        ]);

        GalleryAlbum::create([
            'id'              => 'album-007',
            'title'           => 'Форум «#ПРОЛЮБОВЬ» — 2025',
            'date'            => '2025-11-22',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/f96ccc55f398462af12bec6b80bed0a641114375fb1e240affbe6be5f5057640/6a317a3f/oC79399NoKkxRtm3eqBzUyCjoDWAljpjmx-s5F9Ehsds8Kp5K4M1cjng8fzXIVCLnA0nW9XLULm6tfQiZaXdxg%3D%3D?uid=0&filename=DSC_1855.JPG&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/Форум Про любовь 2025',
        ]);

        GalleryAlbum::create([
            'id'              => 'album-008',
            'title'           => 'Конкурс «Студент года» — 2025',
            'date'            => '2025-10-15',
            'cover_url'       => 'https://downloader.disk.yandex.ru/preview/dbd5f2ddbbaad569a555b58c2a03755e28bf4a8b4fb3759962fe430bb9390860/6a317a3e/P80Ejsmw0NajgCU52h6SvPxuH1u8BPoyYJgar4nb562A0f5LReciuYqVYMhwMcpH_MhdmxtAaJLVF8ofcBTFAA%3D%3D?uid=0&filename=DSC_9320.JPG&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v3&size=800x600&crop=0',
            'yandex_disk_url' => 'https://disk.yandex.ru/d/Tm6VcJT8Z5TFVw/Конкурс «Студент года – 2025»',
        ]);
    }
}