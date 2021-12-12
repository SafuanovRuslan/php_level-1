window.addEventListener("load", () => {
    const bits = document.querySelectorAll(".bit");

    bits.forEach(bit => {
        const audio = bit.querySelector("audio");
        const playButton = bit.querySelector(".bit__play");
        const pauseButton = bit.querySelector(".bit__pause");

        playButton.addEventListener("click", () => {
            audio.play();
            playButton.classList.toggle("none");
            pauseButton.classList.toggle("none");
        });

        pauseButton.addEventListener("click", () => {
            audio.pause();
            playButton.classList.toggle("none");
            pauseButton.classList.toggle("none");
        });
    });
})