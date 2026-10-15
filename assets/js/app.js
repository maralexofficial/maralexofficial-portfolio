import Alpine from 'alpinejs';
import './components/back-to-top.alpine.js';

window.Alpine = Alpine;

console.log('Alpine imported:', Alpine);

Alpine.start();

console.log('Alpine started:', Alpine.version);