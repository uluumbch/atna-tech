import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs'
import anchor from '@alpinejs/anchor'
import scrollTo from 'alpinejs-scroll-to'
import collapse from '@alpinejs/collapse'

Alpine.plugin(collapse)

Alpine.plugin(scrollTo)

Alpine.plugin(anchor)

Alpine.start()
// If you want Alpine's instance to be available globally
window.Alpine = Alpine;

window.toast = function(message, options = {}) {
    window.dispatchEvent(new CustomEvent('toast-show', { 
        detail: { 
            message,
            type: options.type || 'default',
            description: options.description || '',
            position: options.position || 'top-right',
            html: options.html || ''
        }
    }));
}
