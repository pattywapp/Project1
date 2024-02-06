let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let thumbnails = document.querySelectorAll('.thumbnail .item');

// config param
let countItem = items.length;
let itemActive = 0;
// event next click
next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive = 0;
    }
    showSlider();
}
//event prev click
prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showSlider();
}
// auto run slider
let refreshInterval = setInterval(() => {
    next.click();
}, 5000)
function showSlider(){
    // remove item active old
    let itemActiveOld = document.querySelector('.slider .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');

    // active new item
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');

    // clear auto time run slider
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 5000)
}

// click thumbnail
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        itemActive = index;
        showSlider();
    })
})


    // Get references to the <li> items
    const homeLi = document.getElementById('home');
    const toursLi = document.getElementById('tours');
    const galleryLi = document.getElementById('gallery');

    // Add click event listeners to each <li> item
    homeLi.addEventListener('click', function() {
        // Perform action when Home is clicked
        // For example, you can navigate to the home page
        window.location.href = 'home.html';
    });

    toursLi.addEventListener('click', function() {
        // Perform action when Tours is clicked
        // For example, you can navigate to the tours page
        window.location.href = 'tours.html';
    });

    galleryLi.addEventListener('click', function() {
        // Perform action when Gallery is clicked
        // For example, you can navigate to the gallery page
        window.location.href = 'gallery.html';
    });
