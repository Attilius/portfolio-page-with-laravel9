require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const lightDarkSwitch = document.getElementById('light-dark-switch');
const htmlClassList = document.documentElement.classList;
const menuElement = document.getElementsByClassName('menuItem');
const header = document.querySelector('header');

const paths = {
    sun: "M 23.976562 3.9785156 A 1.50015 1.50015 0 0 0 22.5 5.5 L 22.5 8.5 A 1.50015 1.50015 0 1 0 25.5 8.5 L 25.5 5.5 A 1.50015 1.50015 0 0 0 23.976562 3.9785156 z M 10.902344 9.4042969 A 1.50015 1.50015 0 0 0 9.8574219 11.980469 L 11.978516 14.101562 A 1.5012202 1.5012202 0 0 0 14.101562 11.978516 L 11.980469 9.8574219 A 1.50015 1.50015 0 0 0 10.902344 9.4042969 z M 37.050781 9.4042969 A 1.50015 1.50015 0 0 0 36.019531 9.8574219 L 33.898438 11.978516 A 1.5012202 1.5012202 0 0 0 36.021484 14.101562 L 38.142578 11.980469 A 1.50015 1.50015 0 0 0 37.050781 9.4042969 z M 24 13 C 17.942632 13 13 17.942636 13 24 C 13 30.057364 17.942632 35 24 35 C 30.057368 35 35 30.057364 35 24 C 35 17.942636 30.057368 13 24 13 z M 24 16 C 28.436049 16 32 19.563954 32 24 C 32 28.436046 28.436049 32 24 32 C 19.563951 32 16 28.436046 16 24 C 16 19.563954 19.563951 16 24 16 z M 5.5 22.5 A 1.50015 1.50015 0 1 0 5.5 25.5 L 8.5 25.5 A 1.50015 1.50015 0 1 0 8.5 22.5 L 5.5 22.5 z M 39.5 22.5 A 1.50015 1.50015 0 1 0 39.5 25.5 L 42.5 25.5 A 1.50015 1.50015 0 1 0 42.5 22.5 L 39.5 22.5 z M 13.009766 33.445312 A 1.50015 1.50015 0 0 0 11.978516 33.898438 L 9.8574219 36.019531 A 1.501221 1.501221 0 1 0 11.980469 38.142578 L 14.101562 36.021484 A 1.50015 1.50015 0 0 0 13.009766 33.445312 z M 34.943359 33.445312 A 1.50015 1.50015 0 0 0 33.898438 36.021484 L 36.019531 38.142578 A 1.5012209 1.5012209 0 1 0 38.142578 36.019531 L 36.021484 33.898438 A 1.50015 1.50015 0 0 0 34.943359 33.445312 z M 23.976562 37.978516 A 1.50015 1.50015 0 0 0 22.5 39.5 L 22.5 42.5 A 1.50015 1.50015 0 1 0 25.5 42.5 L 25.5 39.5 A 1.50015 1.50015 0 0 0 23.976562 37.978516 z",
    moon: "M41.826,40.004c-0.188-0.58-0.726-0.973-1.336-0.978c-3.128-0.018-6.666-1.599-9.542-3.512 c-1.881,0.685-4.736,1.406-6.334,1.472l-0.275,0.011c-0.562,0.023-1.102,0.046-1.629,0.046c-2.092,0-3.997-0.349-6.466-2.367 l-0.22-0.221l-1.207-1.501c-0.52-0.646-0.417-1.59,0.229-2.109c0.645-0.52,1.591-0.417,2.109,0.229l1.106,1.376 c2.133,1.708,3.352,1.658,5.954,1.551l0.276-0.012c0.831-0.034,2.237-0.335,3.558-0.703c-0.956-0.856-1.72-1.689-2.194-2.399 l1.713-1.141c0.429-0.287,0.666-0.787,0.619-1.305c-0.047-0.515-0.372-0.963-0.848-1.17c-0.041-0.018-0.434-0.196-0.959-0.599 c1.185-0.891,1.975-2.433,2.085-4.253C29.065,22.221,29.5,21.664,29.5,21c0-0.828-0.672-1.5-1.5-1.5h-4.339 c0.315-7.23,5.159-12.799,7.565-14.414c0.519-0.35,0.745-0.986,0.562-1.588C31.604,2.901,31.061,2.5,30.431,2.5 c-9.048,0.034-16.481,3.94-20.394,10.717c-2.929,5.07-3.689,11.205-2.087,16.831c1.543,5.427,5.076,9.855,9.947,12.469 c3.636,1.952,7.561,2.983,11.349,2.983c0.002,0,0.004,0,0.006,0c4.384,0,8.555-1.355,12.064-3.92 C41.809,41.219,42.014,40.586,41.826,40.004z M25.466,22.5c-0.121,0.906-0.56,1.596-1.04,1.867 c-0.282-0.514-0.535-1.106-0.725-1.79L23.699,22.5H25.466z M20.87,22.5l0,0.006l1.134,0.004l-0.65,1.971 c0,0-0.012,0.003-0.023,0.007C20.781,25.402,19.947,26,19,26c-1.528,0-2.776-1.53-2.962-3.5H20.87z"
}

lightDarkSwitch.addEventListener('click', () => {

    const action = htmlClassList.toggle('dark');

    if (action) {
        if (e.target.attributes.length > 1) e.target.firstElementChild.attributes.d.value = paths.moon;
        else e.target.attributes.d.value = paths.moon;
        checkHash();
    } else {
        if (e.target.attributes.length > 1) e.target.firstElementChild.attributes.d.value = paths.sun;
        else e.target.attributes.d.value = paths.sun;
        checkHash();
    }

});

const findReplacedElement = (array, string) => {
    for (let i = 0; i < array.length; i++) {
        if (array[i].startsWith(string)) {
            return array[i];
        }
    }
}

const setColor = (oldClassArray, newClassArray) => {
    header.classList.replace(oldClassArray[0], newClassArray[0]);
    Object.values(menuElement).forEach(elem => {
        elem.classList.replace(oldClassArray[1], newClassArray[1]);
    });
}

setTimeout(() => {
    window.addEventListener('hashchange', () => { checkHash() });
}, 1);

const checkHash = () => {
    const headerClassList = header.classList;
    const menuItemClassList = menuElement[0].classList;
    const dark_replacedElement = findReplacedElement(headerClassList, 'dark:shadow-');
    const dark_replacedElement2 = findReplacedElement(menuItemClassList, 'hover:dark:text-');
    const light_replacedElement = findReplacedElement(headerClassList, 'shadow-');
    const light_replacedElement2 = findReplacedElement(menuItemClassList, 'text-');

    switch (location.hash) {
        case '':
            if (htmlClassList.length) {
                setColor(
                    [dark_replacedElement, dark_replacedElement2],
                    ['dark:shadow-emerald', 'hover:dark:text-emerald-600']
                );

            } else {
                setColor(
                    [light_replacedElement, light_replacedElement2],
                    ['shadow-emerald', 'text-emerald-600']
                );
            }

            break;
        case '#about':
            if (htmlClassList.length) {
                setColor(
                    [dark_replacedElement, dark_replacedElement2],
                    ['dark:shadow-orange', 'hover:dark:text-orange-600']
                );
            } else {
                setColor(
                    [light_replacedElement, light_replacedElement2],
                    ['shadow-orange', 'text-orange-600']
                );
            }

            break;
        case '#portfolio':
            if (htmlClassList.length) {
                setColor(
                    [dark_replacedElement, dark_replacedElement2],
                    ['dark:shadow-primary', 'hover:dark:text-blue-600']
                );
            } else {
                setColor(
                    [light_replacedElement, light_replacedElement2],
                    ['shadow-primary', 'text-blue-600']
                );
            }

            break;
        case '#contact':
            if (htmlClassList.length) {
                setColor(
                    [dark_replacedElement, dark_replacedElement2],
                    ['dark:shadow-golden', 'hover:dark:text-GoldenRod-500']
                );
            } else {
                setColor(
                    [light_replacedElement, light_replacedElement2],
                    ['shadow-golden', 'text-GoldenRod-600']
                );
            }

            break;

        default:
            break;
    }
}
