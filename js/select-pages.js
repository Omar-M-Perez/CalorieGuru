let pages = document.getElementsByClassName('select_tab')
let pageCount = pages.length
let currentIndex = 0;

function nextPage() {
    let prev = currentIndex
    currentIndex += 1;

    if (currentIndex > pageCount - 1) {
        currentIndex = pageCount - 1
    }
    pages[prev].classList.remove("active")
    pages[prev].classList.add("hidden")
    pages[currentIndex].classList.add("active")
}

function previousPage() {
    let prev = currentIndex

    currentIndex -= 1;
    if (currentIndex < 0) currentIndex = 0

    if (currentIndex > pageCount - 1) {
        currentIndex = pageCount - 1
    }
    pages[prev].classList.remove("active")
    pages[prev].classList.add("hidden")
    pages[currentIndex].classList.add("active")
}