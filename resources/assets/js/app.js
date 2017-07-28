var avatar__text = document.querySelector('.avatar__text');

console.log(avatar__text)


setTimeout(()=> {
    TweenMax.to('.splash', .5, {
        opacity: 0,
        display: 'none'
    })
}, 2000)