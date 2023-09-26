//navigation
const navItem = document.querySelectorAll('li');

const changeActiveItem = () => {
    navItem.forEach(item => {
        const link = item.querySelector('a');
        link.classList.remove('active');
    })
}

navItem.forEach(item => {
    const link = item.querySelector('a');
    link.addEventListener('click', () => {
        changeActiveItem();
        link.classList.add('active');
    })
})

//read more
const readMoreBtn = document.querySelector('.read-more');
const readMoreContent = document.querySelector('.read-more-content');

readMoreBtn.addEventListener('click', () => {
    readMoreContent.classList.toggle('show-content');
    if(readMoreContent.classList.contains('show-content')){
        readMoreBtn.textContent = "Show less";
    }
    else{
        readMoreBtn.textContent = "Show more";
    }
})

// show/hide tech used items
const techItems = document.querySelectorAll('section.techused .tech');

techItems.forEach(tech => {
    tech.querySelector('.head').addEventListener('click', () => {
        tech.querySelector('.used').classList.toggle('show-items');
    })
})

//swiper js
const swiper = new Swiper('.swiper', {
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    },
  });
