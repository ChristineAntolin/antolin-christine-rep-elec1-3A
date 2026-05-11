import './bootstrap';

import Alpine from 'alpinejs';
import Chart from 'chart.js/auto';

// Make Chart globally available
window.Chart = Chart;
window.Alpine = Alpine;
Alpine.start();
