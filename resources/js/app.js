import './bootstrap';

import 'flowbite';

import { 
    Datepicker, 
    Timepicker, 
    Input, 
    Ripple,
    initTE,
    Modal 
} from "tw-elements";
initTE({ Datepicker, Timepicker, Input, Ripple, Modal });

import Swal from 'sweetalert2';
window.Swal = Swal;

