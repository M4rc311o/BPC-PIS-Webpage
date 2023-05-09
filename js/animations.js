const barsObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('bars-animation');
        }
    });
});

barsObserver.observe(document.getElementById('web-design-bar'));
barsObserver.observe(document.getElementById('programming-bar'));
barsObserver.observe(document.getElementById('inquations-bar'));

const numbers = {
    'r6-level' : 148,
    'r6-tk' : 999,
    'r6-kd' : 91,
    'r6-win-rate' : 48
}

const numberObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            const animationDuration = 2000;
            let start = 0;
            let end = numbers[entry.target.id];
            let duration = Math.floor(animationDuration / end);
            let counter = setInterval(() => {
                start++;
                entry.target.innerHTML = start;
                if(start == end){
                    clearInterval(counter);
                }
            }, duration);
            numberObserver.unobserve(entry.target);
        }
    });
});

numberObserver.observe(document.getElementById('r6-level'));
numberObserver.observe(document.getElementById('r6-tk'));
numberObserver.observe(document.getElementById('r6-kd'));
numberObserver.observe(document.getElementById('r6-win-rate'));
