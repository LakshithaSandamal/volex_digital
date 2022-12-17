const theme_changer = document.getElementById('theme-changer');
const loadTheme = () => {
    localStorage.getItem('theme') === null ? localStorage.setItem('theme', 'light') : '';
    if (localStorage.getItem('theme') === 'light') {
        document.querySelector(':root').setAttribute('color-scheme', 'light');
        theme_changer.innerHTML = '<i class="icon-moon fs-5"></i>';
    } else {
        document.querySelector(':root').setAttribute('color-scheme', 'dark');
        theme_changer.innerHTML = '<i class="icon-sun fs-5"></i>';
    }
}
const toggleTheme = () => {
    if (localStorage.getItem('theme') === 'light') {
        localStorage.setItem('theme', 'dark');
        document.querySelector(':root').setAttribute('color-scheme', 'dark');
        theme_changer.innerHTML = '<i class="icon-sun fs-5"></i>';
    } else {
        localStorage.setItem('theme', 'light');
        document.querySelector(':root').setAttribute('color-scheme', 'light');
        theme_changer.innerHTML = '<i class="icon-moon fs-5"></i>';
    }
}
const toggleSlideBar = () => {
    document.getElementById('slide-bar').classList.toggle('ml-0');
}
const toggleFullScreen = () => {
    if (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullscreenElement || document.msFullscreenElement) {
        document.exitFullscreen();
        document.getElementById('screen-size-changer').innerHTML = '<i class="icon-maximize fs-5"></i>';
    } else {
        document.documentElement.requestFullscreen();
        document.getElementById('screen-size-changer').innerHTML = '<i class="icon-minimize fs-5"></i>';
    }
}
loadTheme();

// const ctx = document.getElementById('myChart');

// new Chart(ctx, {
//     type: 'pie',
//     data: {
//         labels: ['Red', 'Blue', 'Yellow'],
//         datasets: [{
//             label: '# of Votes',
//             data: [12, 19, 3],
//             borderWidth: 1
//         }]
//     },
// });