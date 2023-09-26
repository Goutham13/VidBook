// show/hide add video
const addVid = document.querySelectorAll('section.add .vidform');

addVid.forEach(vidform => {
    vidform.querySelector('.formt').addEventListener('click', () => {
        vidform.querySelector('.addform').classList.toggle('show-items');
    })
})
