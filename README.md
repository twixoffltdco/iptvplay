# ⚡ IPTVPlayer LIVE APP — Premium 2026 Edition

Революционный IPTV-плеер следующего поколения с поддержкой M3U/M3U8/HLS/DASH и тремя движками воспроизведения.

## 🚀 Особенности

- **Три движка воспроизведения**: PlayerJS + CDN Player (3 fallback) + VideoCDNHub
- **Автоматическое переключение** при ошибках потока
- **4K Ultra HD** поддержка
- **AI Upscale** технологии
- **Минимальная задержка** (0ms latency)

## 📁 Файлы проекта

```
IPTVPlayer-LIVE-APP/
├── live/
│   ├── index.html        ← Лендинг в стиле 2026
│   ├── player.html       ← Основной плеер с выбором движка
│   ├── embed.html        ← Embed плеер для iframe
│   ├── verify.html       ← Капча для проверки безопасности
│   ├── css/
│   │   ├── landing.css   ← Стили лендинга (neon cyberpunk)
│   │   └── player.css    ← Стили плеера
│   └── js/
│       └── player.js     ← Логика плеера
└── README.md             ← Этот файл
```

## 🎮 Как использовать

1. Открой `live/index.html` в браузере
2. Нажми «Запустить плеер» → `live/player.html`
3. Выбери движок воспроизведения:
   - **PlayerJS** — основной движок из репозитория
   - **CDN Player** — три fallback варианта для надёжности
   - **VideoCDNHub** — альтернативный проигрыватель
4. Вставь M3U ссылку и нажми «Загрузить»
5. Выбери канал и смотри!

## 🔗 Поддерживаемые форматы

- M3U / M3U8
- HLS (HTTP Live Streaming)
- MPEG-DASH
- MP4, WebM, TS, FLV

## 🎬 Три движка воспроизведения

### 1. PlayerJS (Основной)
Использует стандартный script плеера из главной репо.

### 2. CDN Player (3 Fallback)
```html
<script src="https://cdn.jsdelivr.net/gh/OinkTechLLC/cdnplayerjs@main/playerjs.js"></script>
<script src="https://cdn.jsdelivr.net/gh/OinkTechLtd/cdnplayerjs@main/playerjs.js"></script>
<script src="https://cdn.jsdelivr.net/gh/twixoffltdco/cdnplayerjs@main/playerjs.js"></script>
```
Автоматическое переключение между тремя источниками при ошибках.

### 3. VideoCDNHub
```
https://videocdnhub.tatnet.app/?src=<ссылка_на_поток>
```
Альтернативный движок для максимальной совместимости.

## 🔐 Проверка безопасности

При множественных запросах с одного IP появляется капча в стиле Яндекс «Я не робот».
Файл: `live/verify.html`

## 🎨 Стиль 2026

- **Neon Cyberpunk** эстетика
- Цвета: #00f0ff (cyan), #ff00aa (magenta)
- Шрифты: Orbitron + Rajdhani
- Glassmorphism эффекты
- Neon glow анимации

## ⌨️ Горячие клавиши

| Клавиша | Действие |
|---------|----------|
| Пробел | Пауза/воспроизведение |
| ← → | Перемотка ±10 сек |
| ↑ ↓ | Громкость |
| M | Mute |
| F | Полный экран |

## 🌐 Публикация на GitHub Pages

1. Загрузи репозиторий на GitHub
2. Включи GitHub Pages в настройках
3. Твой сайт будет доступен по адресу: `https://<username>.github.io/<repo>/live/`

---

© 2026 IPTVPlayer LIVE APP · Premium Edition
Сделано с любовью ❤️ для OinkTechLLC (OinkTechLtd)
