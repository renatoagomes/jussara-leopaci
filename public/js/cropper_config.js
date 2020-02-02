/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 43);
/******/ })
/************************************************************************/
/******/ ({

/***/ 43:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(44);


/***/ }),

/***/ 44:
/***/ (function(module, exports) {

window.bindCropperJS = function () {

    $('.btnStartCrop').on('click', function (ev) {
        console.log('.btnStartCrop clicked');
        console.log(ev);
        var aspectRatio = $(ev.target).data('aspectratio');
        var previewID = $(ev.target).data('previewid');
        var formID = $(ev.target).data('formid');

        console.log(aspectRatio);
        console.log(previewID);

        initCropper(previewID, aspectRatio, formID);
    });

    $('.btnCancelCrop').on('click', function (ev) {
        console.log('.btnCancelCrop clicked');
        console.log(ev);
        var previewID = $(ev.target).data('previewid');
        var formID = $(ev.target).data('formid');

        destroyCropper(previewID, formID);
    });

    $('.btnConfirmCrop').on('click', function (ev) {
        console.log('.btnConfirmCrop clicked');
        console.log(ev);
        var formID = $(ev.target).data('formid');
        var previewID = $(ev.target).data('previewid');
        var croppedImage = $(previewID).cropper('getCroppedCanvas').toDataURL('image/jpeg');

        swal({
            title: 'Carregando...',
            html: '<br><i class="fa fa-spin fa-spinner fa-3x"></i><br><br><br>',
            showConfirmButton: false
        });

        $(formID).find('input[type=file]').remove();
        $(formID).append("<input name='file' type='hidden'/>");
        $(formID).find('input[name=file]').val(croppedImage);
        $(formID).submit();
    });
};

function initCropper(previewID, aspectRatio, formID) {
    console.log('formID' + formID);
    $(previewID).cropper({
        aspectRatio: aspectRatio
    });
    $(formID).find('input[type=file]').hide();
    $(formID).find('.btnStartCrop').hide();
    $(formID).find('.btnConfirmCrop').show();
    $(formID).find('.btnCancelCrop').show();
}

function destroyCropper(previewID, formID) {
    $(previewID).cropper('destroy');
    $(formID).find('input[type=file]').show();
    $(formID).find('.btnStartCrop').show();
    $(formID).find('.btnConfirmCrop').hide();
    $(formID).find('.btnCancelCrop').hide();
}

$(function () {
    bindCropperJS();
    $('input[type=file]').on('change', function (el) {
        swal({
            title: 'Carregando...',
            html: '<br><i class="fa fa-spin fa-spinner fa-3x"></i><br><br><br>',
            showConfirmButton: false
        });
        $(el.target).parents('form').submit();
    });
});

/***/ })

/******/ });