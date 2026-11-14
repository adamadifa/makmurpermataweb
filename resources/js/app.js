import Alpine from 'alpinejs';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import lottie from 'lottie-web';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

window.Alpine = Alpine;
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay };
window.lottie = lottie;

Alpine.start();
