document.addEventListener('DOMContentLoaded', function () {
    const sliders = document.querySelectorAll('.slider');
    M.Slider.init(sliders, { indicators: true, height: 500 });
});
