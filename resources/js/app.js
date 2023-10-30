import './bootstrap';

import 'flowbite';

import { 
    Datepicker, 
    Timepicker, 
    Input, 
    Ripple,
    initTE 
} from "tw-elements";
initTE({ Datepicker, Timepicker, Input, Ripple });

import Swal from 'sweetalert2';
window.Swal = Swal;

