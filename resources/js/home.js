/**
 * Home page YouTube integration
 * Wordt alleen uitgevoerd als de juiste elementen bestaan
 */

const CHANNEL_ID = 'UC6pSvjsaxbLQGh-T2KePxIA';
const API_KEY = 'AIzaSyB63XfgsuZrRax2j9KaNXML0t8LdN2PoiM';

/* =========================
   Helpers
========================= */
const formatNumber = (num) =>
    new Intl.NumberFormat('nl-NL').format(num);

/* =========================
   Subscriber count (hero)
========================= */
async function getSubscriberCount() {
    const el = document.getElementById('subCount');
    if (!el) return;

    try {
        const res = await fetch(
            `https://www.googleapis.com/youtube/v3/channels?part=statistics&id=${CHANNEL_ID}&key=${API_KEY}`
        );
        const data = await res.json();
        el.textContent = formatNumber(data.items[0].statistics.subscriberCount);
    } catch {
        el.textContent = 'Niet beschikbaar';
    }
}

/* =========================
   Channel stats (about)
========================= */
async function getChannelStats() {
    const sub2 = document.getElementById('subCount2');
    const views = document.querySelector('.view-count');
    const videos = document.querySelector('.video-count');

    if (!sub2 || !views || !videos) return;

    try {
        const res = await fetch(
            `https://www.googleapis.com/youtube/v3/channels?part=statistics&id=${CHANNEL_ID}&key=${API_KEY}`
        );
        const stats = (await res.json()).items[0].statistics;

        sub2.textContent = formatNumber(stats.subscriberCount);
        videos.textContent = formatNumber(stats.videoCount);
        views.textContent = formatNumber(stats.viewCount);
    } catch (err) {
        console.error('Stats error:', err);
    }
}

/* =========================
   Latest videos
========================= */
async function loadLatestVideos() {
    const container = document.getElementById('latestVideos');
    if (!container) return;

    try {
        const res = await fetch(
            `https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet,id&order=date&maxResults=3&type=video`
        );
        const data = await res.json();

        container.innerHTML = '';

        data.items = data.items.slice(0, 3);

        data.items.forEach(item => {
            const wrapper = document.createElement('div');
            wrapper.className =
                'bg-black rounded-2xl overflow-hidden shadow-lg hover:-translate-y-1 transition-transform';

            const iframe = document.createElement('iframe');
            iframe.src = `https://www.youtube.com/embed/${item.id.videoId}`;
            iframe.className = 'w-full aspect-video';
            iframe.allow =
                'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
            iframe.allowFullscreen = true;

            wrapper.appendChild(iframe);
            container.appendChild(wrapper);

        });
    } catch (err) {
        console.error('Video load error:', err);
    }
}

/* =========================
   Init
========================= */
document.addEventListener('DOMContentLoaded', () => {
    getSubscriberCount();
    getChannelStats();
    loadLatestVideos();

    // Refresh elke 30 sec
    setInterval(() => {
        getSubscriberCount();
        getChannelStats();
    }, 30000);
});
