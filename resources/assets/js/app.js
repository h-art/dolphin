var avatar__text = document.querySelector('.avatar__text');

console.log(avatar__text)

setTimeout(()=> {
    TweenMax.to('.avatar__text', .3, {
        opacity: 1,
        y: 0
    })
}, 1500)
setTimeout(()=> {
    TweenMax.to('.splash', .5, {
        opacity: 0,
        display: 'none'
    })
}, 4000)