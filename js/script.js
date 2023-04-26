console.clear();
let count = 0;
const targets = document.querySelectorAll(".box");
gsap.set(targets, { xPercent: 100 });
gsap.set(targets[0], { xPercent: 0 });

// Next button
function slideOneNext() {
gsap.fromTo(targets[count], { xPercent: 0, zIndex: 0 }, { delay: 0.2, duration: 1.2, xPercent: 0, zIndex: -10 });
count = count < targets.length - 1 ? ++count : 0;
gsap.fromTo(targets[count], { xPercent: 100, zIndex: 10 }, { duration: 1.2, xPercent: 0, zIndex: 0 });
}
nextButton.addEventListener("click", function() {
slideOneNext();
});

// Previous button
function slideOnePrev() {
  gsap.fromTo(targets[count], { xPercent: 0, zIndex: 10 }, {xPercent: 0, zIndex: 0 });
  gsap.fromTo(targets[count], { xPercent: 0, zIndex: 0 }, { delay: 0, duration: 1.2, xPercent: 100, zIndex: -10 });
  count = count < targets.length ? --count : 0;
}
prevButton.addEventListener("click", function() {
  slideOnePrev();
});
