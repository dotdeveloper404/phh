import './bootstrap';

import Alpine from 'alpinejs';
import sweetalert2 from 'sweetalert2'
import CkEditor from '@ckeditor/ckeditor5-build-classic'


window.Alpine = Alpine;
window.swal = sweetalert2
window.CkEditor = CkEditor

Alpine.start();
