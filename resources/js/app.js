import './bootstrap';
import Alpine from 'alpinejs'
import anchor from '@alpinejs/anchor'
import scrollTo from 'alpinejs-scroll-to'

Alpine.plugin(scrollTo)

Alpine.plugin(anchor)

Alpine.start()
// If you want Alpine's instance to be available globally
window.Alpine = Alpine
