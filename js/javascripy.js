// Get the elements
const dynamicObject = document.getElementById('searchbar');
const dynamicObject2 = document.getElementById('home1');
const otherObject = document.getElementById('searchtable');

// Update the height of dynamicObject based on otherObject's height
function updateDynamicObjectHeight() {
  const otherObjectHeight = otherObject.offsetHeight;
  dynamicObject.style.height = otherObjectHeight + 'px';
  dynamicObject2.style.height = otherObjectHeight + 'px';
}

// Call the function initially and whenever the height changes
updateDynamicObjectHeight();
window.addEventListener('resize', updateDynamicObjectHeight);
