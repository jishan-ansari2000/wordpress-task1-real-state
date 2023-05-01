let sectionSubHeading = document.getElementsByClassName("wp-block-heading");

Object.values(sectionSubHeading).forEach((heading) => {
  heading.classList.add("sectionHeading");
});
