"use strict";
/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunkformo2022"] = self["webpackChunkformo2022"] || []).push([["index"],{

/***/ "./js-src/accordion.js":
/*!*****************************!*\
  !*** ./js-src/accordion.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   accordion: () => (/* binding */ accordion)\n/* harmony export */ });\nfunction accordion(){\n\n  class Accordion {\n    constructor(el) {\n      // Store the <details> element\n      this.el = el;\n      // Store the <summary> element\n      this.summary = el.querySelector('summary');\n      // Store the <div class=\"content\"> element\n      this.content = el.querySelector('.content');\n\n      // Store the animation object (so we can cancel it if needed)\n      this.animation = null;\n      // Store if the element is closing\n      this.isClosing = false;\n      // Store if the element is expanding\n      this.isExpanding = false;\n      // Detect user clicks on the summary element\n      this.summary.addEventListener('click', (e) => this.onClick(e));\n    }\n\n    onClick(e) {\n      // Stop default behaviour from the browser\n      e.preventDefault();\n      // Add an overflow on the <details> to avoid content overflowing\n      this.el.style.overflow = 'hidden';\n      // Check if the element is being closed or is already closed\n      if (this.isClosing || !this.el.open) {\n        this.open();\n      // Check if the element is being openned or is already open\n      } else if (this.isExpanding || this.el.open) {\n        this.shrink();\n      }\n    }\n\n    shrink() {\n      // Set the element as \"being closed\"\n      this.isClosing = true;\n    \n      // Store the current height of the element\n      const startHeight = `${this.el.offsetHeight}px`;\n      // Calculate the height of the summary\n      const endHeight = `${this.summary.offsetHeight}px`;\n    \n      // If there is already an animation running\n      if (this.animation) {\n        // Cancel the current animation\n        this.animation.cancel();\n      }\n    \n      // Start a WAAPI animation\n      this.animation = this.el.animate({\n        // Set the keyframes from the startHeight to endHeight\n        height: [startHeight, endHeight]\n      }, {\n        duration: 300,\n        easing: 'cubic-bezier(0.080, 1.635, 0.430, 0.840)'\n      });\n    \n      // When the animation is complete, call onAnimationFinish()\n      this.animation.onfinish = () => this.onAnimationFinish(false);\n      // If the animation is cancelled, isClosing variable is set to false\n      this.animation.oncancel = () => this.isClosing = false;\n    }\n\n    open() {\n      // Apply a fixed height on the element\n      this.el.style.height = `${this.el.offsetHeight}px`;\n      // Force the [open] attribute on the details element\n      this.el.open = true;\n      // Wait for the next frame to call the expand function\n      window.requestAnimationFrame(() => this.expand());\n    }\n\n    expand() {\n      // Set the element as \"being expanding\"\n      this.isExpanding = true;\n      // Get the current fixed height of the element\n      const startHeight = `${this.el.offsetHeight}px`;\n      // Calculate the open height of the element (summary height + content height)\n      const endHeight = `${this.summary.offsetHeight + this.content.offsetHeight}px`;\n    \n      // If there is already an animation running\n      if (this.animation) {\n        // Cancel the current animation\n        this.animation.cancel();\n      }\n    \n      // Start a WAAPI animation\n      this.animation = this.el.animate({\n        // Set the keyframes from the startHeight to endHeight\n        height: [startHeight, endHeight]\n      }, {\n        duration: 500,\n        easing: 'cubic-bezier(0.080, 1.635, 0.430, 0.840)'\n      });\n      // When the animation is complete, call onAnimationFinish()\n      this.animation.onfinish = () => this.onAnimationFinish(true);\n      // If the animation is cancelled, isExpanding variable is set to false\n      this.animation.oncancel = () => this.isExpanding = false;\n    }\n\n    onAnimationFinish(open) {\n      // Set the open attribute based on the parameter\n      this.el.open = open;\n      // Clear the stored animation\n      this.animation = null;\n      // Reset isClosing & isExpanding\n      this.isClosing = false;\n      this.isExpanding = false;\n      // Remove the overflow hidden and the fixed height\n      this.el.style.height = this.el.style.overflow = '';\n    }\n  }\n\n  document.querySelectorAll('details').forEach((el) => {\n    new Accordion(el);\n  });\n\n\n\n}\n\n//# sourceURL=webpack://formo2022/./js-src/accordion.js?");

/***/ }),

/***/ "./js-src/index.js":
/*!*************************!*\
  !*** ./js-src/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _nav_mobile__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./nav-mobile */ \"./js-src/nav-mobile.js\");\n/* harmony import */ var _nav_hide__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./nav-hide */ \"./js-src/nav-hide.js\");\n/* harmony import */ var _nav_subnav__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./nav-subnav */ \"./js-src/nav-subnav.js\");\n/* harmony import */ var _nav_language__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./nav-language */ \"./js-src/nav-language.js\");\n/* harmony import */ var _teammember_sorting__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./teammember-sorting */ \"./js-src/teammember-sorting.js\");\n/* harmony import */ var _videoPlayPauseOnScroll__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./videoPlayPauseOnScroll */ \"./js-src/videoPlayPauseOnScroll.js\");\n/* harmony import */ var _videoPlayPauseOnHover__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./videoPlayPauseOnHover */ \"./js-src/videoPlayPauseOnHover.js\");\n/* harmony import */ var _accordion__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./accordion */ \"./js-src/accordion.js\");\n/* harmony import */ var _nav_current__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./nav-current */ \"./js-src/nav-current.js\");\n\n\n\n\n\n\n\n\n\n\n(0,_nav_mobile__WEBPACK_IMPORTED_MODULE_0__.mobileNav)();\n(0,_nav_hide__WEBPACK_IMPORTED_MODULE_1__.hideNav)();\n(0,_nav_subnav__WEBPACK_IMPORTED_MODULE_2__.subNav)();\n(0,_nav_current__WEBPACK_IMPORTED_MODULE_8__.currentNav)();\n(0,_nav_language__WEBPACK_IMPORTED_MODULE_3__.languageSwitcher)();\n(0,_teammember_sorting__WEBPACK_IMPORTED_MODULE_4__.teamMemberSorting)();\n(0,_videoPlayPauseOnScroll__WEBPACK_IMPORTED_MODULE_5__.videoPlayPauseOnScroll)();\n(0,_videoPlayPauseOnHover__WEBPACK_IMPORTED_MODULE_6__.videoPlayPauseOnHover)();\n(0,_accordion__WEBPACK_IMPORTED_MODULE_7__.accordion)();\n\n// Fake vh for mobile\nvar vh = window.innerHeight * 0.01;\ndocument.documentElement.style.setProperty('--vh', `${vh}px`);\n\n//# sourceURL=webpack://formo2022/./js-src/index.js?");

/***/ }),

/***/ "./js-src/nav-current.js":
/*!*******************************!*\
  !*** ./js-src/nav-current.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   currentNav: () => (/* binding */ currentNav)\n/* harmony export */ });\nfunction currentNav(){\n  \n  const navbar = document.querySelector('.formo-navi');\n  const navBgClassList = Array.from(navbar.classList);\n  const navBgClass = navBgClassList.filter( (className) => {\n    return className.includes('has-formo-');\n  });\n  if ( navBgClass ) {\n    navBgClass.forEach( (className) => {\n      navbar.classList.remove(className) \n    })\n  } \n  else { null };\n\n  const firstContainer = document.querySelector('.entry-content > :first-child');\n  const allClasses = Array.from(firstContainer.classList);\n  const newBgClass = allClasses.filter( (className) => {\n    return className.includes('has-formo-');\n  })\n\n  navbar.classList.add(newBgClass[0]);\n  navbar.classList.add(newBgClass[1]);\n}\n\n//# sourceURL=webpack://formo2022/./js-src/nav-current.js?");

/***/ }),

/***/ "./js-src/nav-hide.js":
/*!****************************!*\
  !*** ./js-src/nav-hide.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   hideNav: () => (/* binding */ hideNav)\n/* harmony export */ });\nfunction hideNav(){\n\n  let prevScrollpos = window.pageYOffset;\n  let parentElement = document.body;\n  window.onscroll = function() {\n    if ( document.body.classList.contains( 'nav-open' ) ) {\n      return; // if the mobile nav is opened, don't hide it\n    } else {\n      // check scroll position\n      let currentScrollPos = window.pageYOffset;\n\n      if ( currentScrollPos < 65) {\n        // if the scroll position is less than 65, show and don't do anything\n        if ( parentElement.classList.contains( 'nav-hidden' ) ) {\n          parentElement.classList.remove( 'nav-hidden' );\n        }\n        return;\n      }\n      if (prevScrollpos > currentScrollPos) {\n        // if scrolling up, show the nav\n        if ( parentElement.classList.contains( 'nav-hidden' ) ) {\n          parentElement.classList.remove( 'nav-hidden' );\n        }\n      } else {\n        if ( !parentElement.classList.contains( 'nav-hidden' ) ) {\n          parentElement.classList.add( 'nav-hidden' );\n        }\n      }\n      prevScrollpos = currentScrollPos;\n    }\n  }\n}\n\n//# sourceURL=webpack://formo2022/./js-src/nav-hide.js?");

/***/ }),

/***/ "./js-src/nav-language.js":
/*!********************************!*\
  !*** ./js-src/nav-language.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   languageSwitcher: () => (/* binding */ languageSwitcher)\n/* harmony export */ });\nfunction languageSwitcher() {\n  const switcher = document.querySelector('.wp-block-polylang-language-switcher');\n  switcher.addEventListener('click', (e) => {\n    const target = e.target;\n    if (target.classList.contains('current-lang') || target.parentElement.classList.contains('current-lang') ) {\n      e.preventDefault();\n    }\n    else {\n      document.querySelector('.current-lang').classList.remove('current-lang');\n      target.closest('li').classList.add('current-lang');\n    }\n    switcher.classList.toggle('expanded');\n  });\n}\n\n//# sourceURL=webpack://formo2022/./js-src/nav-language.js?");

/***/ }),

/***/ "./js-src/nav-mobile.js":
/*!******************************!*\
  !*** ./js-src/nav-mobile.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   mobileNav: () => (/* binding */ mobileNav)\n/* harmony export */ });\nfunction mobileNav(){\n  const navbar = document.querySelector('.formo-navi');\n  const links = Array.from(document.querySelectorAll('.formo-navi a:not(.mobile-nav-toggle .wp-block-button__link)'));\n  const toggler = document.querySelector('.mobile-nav-toggle .wp-block-button__link');\n\n  toggler.addEventListener('click', () => {\n    navbar.classList.toggle('is-open');\n    document.body.classList.toggle('nav-open');\n  })\n  \n  links.forEach(link => {\n    link.addEventListener('click', () => {\n      const linkURL = link.querySelector('a')?.href;\n      if (linkURL === window.location?.href || linkURL === '' || !linkURL) return;\n      navbar.classList.contains('is-open') ? navbar.classList.remove('is-open') : null;\n      document.body.classList.contains('nav-open') ? document.body.classList.remove('nav-open') : null;\n    });\n  })\n}\n\n//# sourceURL=webpack://formo2022/./js-src/nav-mobile.js?");

/***/ }),

/***/ "./js-src/nav-subnav.js":
/*!******************************!*\
  !*** ./js-src/nav-subnav.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   subNav: () => (/* binding */ subNav)\n/* harmony export */ });\nfunction subNav() {\n  const allSubNavs = document.querySelectorAll('li.wp-block-navigation-submenu > a');\n  allSubNavs.forEach(subNav => {\n    //only touchend listener so this only happens on touch devices\n    subNav.addEventListener('touchend', (e) => {\n      e.preventDefault();\n      e.target.parentElement.classList.toggle('open');\n    })\n  });\n}\n\n//# sourceURL=webpack://formo2022/./js-src/nav-subnav.js?");

/***/ }),

/***/ "./js-src/teammember-sorting.js":
/*!**************************************!*\
  !*** ./js-src/teammember-sorting.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   teamMemberSorting: () => (/* binding */ teamMemberSorting)\n/* harmony export */ });\nfunction teamMemberSorting(){\n  const wrapper = document.querySelector('.formo2022-teammember-sorting');\n  if (!wrapper) { return }\n\n  const teamMembers = Array.from(document.querySelectorAll('.formo2022_teammember'));\n  const questions = Array.from(document.querySelectorAll('.formo2022-teammember-sorting-questions a'));\n  const prevBtn = document.querySelector('.formo2022-teammember-sorting-nav > div:first-child a');\n  const nextBtn = document.querySelector('.formo2022-teammember-sorting-nav > div:last-child a');\n\n  function rando(min, max) { // min and max included \n    return Math.floor(Math.random() * (max - min + 1) + min)\n  }\n\n  function sortby(target) {\n    teamMembers.forEach(member => {\n\n      if (member.querySelector('video[controls]')){\n        member.querySelector('video[controls]').attributes.removeNamedItem('controls');\n      }\n      let memberOffset = member.offsetWidth / 2;\n      let height = document.querySelector('.formo2022-teammember-sorting-teammembers').getBoundingClientRect().height;\n      let xOff = rando(memberOffset, ( window.innerWidth / 2 - memberOffset ) );\n      let yOff = rando(height / -2 , ( height / 2 - memberOffset ) );\n      let scale = rando(60, 100) / 100;\n      if (member.classList.contains('traits-'+target)) {\n        member.style.transform = 'translate(0px, 0px) scale(1)';\n        setTimeout(() => {\n          member.style.transform = 'translate('+xOff+'px, '+yOff+'px) scale('+scale+')';\n        }, 800);\n        \n      } else if (member.classList.contains('traits-'+target+'-not')) {\n        member.style.transform = 'translate(0px, 0px) scale(1)';\n        setTimeout(() => {\n          member.style.transform = 'translate(-'+xOff+'px, '+yOff+'px) scale('+scale+')';\n        }, 800);\n      } else {\n        member.style.transform = 'translate(0px, 0px) scale(1)';\n        setTimeout(() => {\n          member.style.transform = 'translate(0px, 0px) scale(0)';\n        }, 800);\n      }\n    })\n  }\n\n  function nextQuestion() {\n    let currentQuestion = document.querySelector('.formo2022-teammember-sorting-questions a.active');\n    let nextQuestion;\n    if ( currentQuestion.closest('p').nextElementSibling ) {\n      nextQuestion = currentQuestion.closest('p').nextElementSibling.querySelector('a')\n    }\n    else  { \n      nextQuestion = questions[0];\n    }\n    currentQuestion.classList.remove('active');\n    nextQuestion.classList.add('active');\n    sortby(nextQuestion.getAttribute('href').replace('#',''));\n  }\n  function prevQuestion() {\n    let currentQuestion = document.querySelector('.formo2022-teammember-sorting-questions a.active');\n    let prevQuestion;\n    if ( currentQuestion.closest('p').previousElementSibling ){\n      prevQuestion = currentQuestion.closest('p').previousElementSibling.querySelector('a');\n    }\n    else { \n      prevQuestion = questions[questions.length-1];\n    }\n    currentQuestion.classList.remove('active');\n    prevQuestion.classList.add('active');\n    sortby(prevQuestion.getAttribute('href').replace('#',''));\n  }\n\n  nextBtn.addEventListener('click', function(e) {\n    e.preventDefault();\n    nextQuestion();\n  })\n  prevBtn.addEventListener('click', function(e) {\n    e.preventDefault();\n    prevQuestion();\n  })\n\n \n  questions.forEach(question => {\n    const target = question.getAttribute('href').replace('#', '');\n    question.addEventListener('click', function(e){\n      e.preventDefault();\n      question.classList.add('active');\n      sortby(target);\n    })\n  })\n\n  questions[0].classList.add('active');\n  sortby(questions[0].getAttribute('href').replace('#',''));\n  \n}\n\n//# sourceURL=webpack://formo2022/./js-src/teammember-sorting.js?");

/***/ }),

/***/ "./js-src/videoPlayPauseOnHover.js":
/*!*****************************************!*\
  !*** ./js-src/videoPlayPauseOnHover.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   videoPlayPauseOnHover: () => (/* binding */ videoPlayPauseOnHover)\n/* harmony export */ });\nfunction videoPlayPauseOnHover() {\n\n  \n  const allHoverPlayVideosOnPage = document.querySelectorAll('.video-play-on-hover video');\n\n  if (allHoverPlayVideosOnPage.length == 0) {\n    return;\n  }\n  \n\n  const mq = window.matchMedia( \"(hover: hover)\" );\n  \n  if (mq.matches) {\n    allHoverPlayVideosOnPage.forEach(video => {\n      video.addEventListener('mouseover', () => {\n        video.play();\n      });\n      video.addEventListener('mouseout', () => {\n        video.pause();\n      });\n      video.pause();\n    })\n  }   \n  else {\n    const videoObserver = new IntersectionObserver((entries) => {\n      entries.forEach((entry) => {\n        if (!entry.isIntersecting) {\n          entry.target.pause();\n        } else {\n          entry.target.play();\n        }\n      });\n    }, {});\n    \n    allHoverPlayVideosOnPage.forEach(video => {\n      videoObserver.observe(video);\n  \n      const onVisibilityChange = () => {\n        if (document.hidden) {\n          video.pause();\n        } else {\n          video.play();\n        }\n      };\n      document.addEventListener(\"visibilitychange\", onVisibilityChange);\n  \n    })\n  }\n\n\n}\n\n//# sourceURL=webpack://formo2022/./js-src/videoPlayPauseOnHover.js?");

/***/ }),

/***/ "./js-src/videoPlayPauseOnScroll.js":
/*!******************************************!*\
  !*** ./js-src/videoPlayPauseOnScroll.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   videoPlayPauseOnScroll: () => (/* binding */ videoPlayPauseOnScroll)\n/* harmony export */ });\nfunction videoPlayPauseOnScroll() {\n\n  \n  const allAutoplayVideosOnPage = document.querySelectorAll(':not(.video-play-on-hover) > video[autoplay]');\n\n  if (allAutoplayVideosOnPage.length == 0) {\n    return;\n  }\n  \n  const videoObserver = new IntersectionObserver((entries) => {\n    entries.forEach((entry) => {\n      if (!entry.isIntersecting) {\n        entry.target.pause();\n      } else {\n        entry.target.play();\n      }\n    });\n  }, {});\n  \n  allAutoplayVideosOnPage.forEach(video => {\n    videoObserver.observe(video);\n\n    const onVisibilityChange = () => {\n      if (document.hidden) {\n        video.pause();\n      } else {\n        video.play();\n      }\n    };\n    document.addEventListener(\"visibilitychange\", onVisibilityChange);\n\n  })\n\n\n}\n\n//# sourceURL=webpack://formo2022/./js-src/videoPlayPauseOnScroll.js?");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./js-src/index.js"));
/******/ }
]);