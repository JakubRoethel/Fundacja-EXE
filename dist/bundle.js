/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://fundacja-exe/./src/css/main.scss?");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/main.scss */ \"./src/css/main.scss\");\n/* harmony import */ var _modules_hover__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/hover */ \"./src/js/modules/hover.js\");\n/* harmony import */ var _modules_swiper_objects__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/swiper-objects */ \"./src/js/modules/swiper-objects.js\");\n\n\n\n\n(0,_modules_hover__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\n(0,_modules_swiper_objects__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\n\n//# sourceURL=webpack://fundacja-exe/./src/js/main.js?");

/***/ }),

/***/ "./src/js/modules/hover.js":
/*!*********************************!*\
  !*** ./src/js/modules/hover.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ hoverService)\n/* harmony export */ });\nfunction hoverService() {\n  // Pobieranie wszystkich elementów nawigacji\n  const navItems = document.querySelectorAll('.slider-title-wrapper');\n  \n  // Pobieranie wszystkich zawartości\n  const singleSlides = document.querySelectorAll('.single-slide');\n  \n  // Przypisanie klasy active dla pierwszego elementu nawigacji i pierwszej zawartości\n  navItems[0].classList.add('active');\n  singleSlides[0].classList.add('active-slide');\n\n  // Iterowanie przez elementy nawigacji\n  navItems.forEach((navItem, index) => {\n    // Zmiana nasłuchiwacza z kliknięcia na najechanie myszką (hover)\n    navItem.addEventListener('mouseover', () => {\n      // Usunięcie klasy active ze wszystkich elementów nawigacji\n      navItems.forEach((item) => {\n        item.classList.remove('active');\n      });\n\n      // Dodanie klasy active do najechanego elementu nawigacji\n      navItem.classList.add('active');\n\n      // Usunięcie klasy active-slide ze wszystkich zawartości\n      singleSlides.forEach((slide) => {\n        slide.classList.remove('active-slide');\n      });\n\n      // Dodanie klasy active-slide do odpowiedniej zawartości zgodnie z indeksem\n      singleSlides[index].classList.add('active-slide');\n    });\n  });\n}\n\n\n//# sourceURL=webpack://fundacja-exe/./src/js/modules/hover.js?");

/***/ }),

/***/ "./src/js/modules/swiper-objects.js":
/*!******************************************!*\
  !*** ./src/js/modules/swiper-objects.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (/* binding */ swiperService)\n/* harmony export */ });\nfunction swiperService() {\n\n  var swiper1 = new Swiper(\".swiper\", {\n    effect: \"slide\",\n    grabCursor: true,\n    centeredSlides: false,\n    slidesPerView: \"3\",\n    spaceBetween: 0,\n    loop: true,\n    autoplay: {\n      delay: 3000,\n    },\n    spaceBetween: 17,\n    navigation: {\n      nextEl: \".swiper-button-next\",\n      prevEl: \".swiper-button-prev\",\n    },\n  });\n  \n}\n\n\n//# sourceURL=webpack://fundacja-exe/./src/js/modules/swiper-objects.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/main.js");
/******/ 	
/******/ })()
;