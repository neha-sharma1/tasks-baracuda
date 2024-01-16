## Include Files

*Hinweise: The CSS files should be included at the end of the head tag. The JavaScipt files at the end of the body tag

* [ ] Include the `js/utils.js` in the page.
* [ ] Create your own `js/scripts.js` and embed it after the `utils.js`.
* [ ] Include the current files of [Bootstrap](https://getbootstrap.com) (either through their CDN or download the files).

### Additions to utils.js

*In the utils.js the `validateForm()` misses the comparison if the two passwords match. Add this check using the `compareStrings()` function.*

* [ ] Create an `if`-statement that checks if the password match. If they don't match, the `validateForm` function should return `false` and add the CSS class `is-invalid` to the field with the ID `inputPasswordRepeat`.
* [ ] Comment your code.

## Custom scripts.js
* [ ] In the `scripts.js`, add an event listener to the form with the ID `registerForm` that listens to the `submit` event. In case of the event, use the `validateForm()` function to check if all input is valid. If not, prevent submitting the form. Only if all validations passed, allow submitting the form.

## Links

* [document.getElementById()](https://developer.mozilla.org/en-US/docs/Web/API/Document/getElementById)
* [Document.querySelector()](https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector)
* [Browser Elements](https://developer.mozilla.org/en-US/docs/Web/API/Element)
* [Element.classList](https://developer.mozilla.org/en-US/docs/Web/API/Element/classList)
* [Browser Events](https://developer.mozilla.org/en-US/docs/Web/API/Event)
* [EventTarget.addEventListener()](https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener)
* [Event.preventDefault()](https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault)
* [Bootstrap](https://getbootstrap.com/)
