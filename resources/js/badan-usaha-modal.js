import { Modal } from 'flowbite';

const $targetEl = document.getElementById('paket-pt-modal');
const buttons1 = document.querySelectorAll('.paket-pt-modal');


// options with default values
const options = {
  placement: 'bottom-right',
  backdrop: 'dynamic',
  backdropClasses: 'bg-gray-900/50 fixed inset-0 z-40',
  closable: true,
  onHide: () => {
      console.log('modal is hidden');
  },
  onShow: () => {
      console.log('modal is shown');
  },
  onToggle: () => {
      console.log('modal has been toggled');
  }
};

/*
 * $targetEl: required
 * options: optional
 */
// const modal = new Modal($targetEl, options);
