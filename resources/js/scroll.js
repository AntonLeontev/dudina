function throttle(callback, timeout) {
	
	let timer = null

	return function perform(...args) {
		if (timer) return

		timer = setTimeout(() => {
			callback(...args)

			clearTimeout(timer)
			timer = null
		}, timeout)
	}
}

function isElementWithinTwoScreens(element) {
	const scrollPosition = window.scrollY || window.pageYOffset;
	
	const screenHeight = window.innerHeight || document.documentElement.clientHeight;
	
	const elementRect = element.getBoundingClientRect();
	const elementPosition = scrollPosition + elementRect.top;
	
	const lowerBound = scrollPosition + (screenHeight * 2); 
	
	return elementPosition <= lowerBound;
}

const onScroll = function () {
	
	
	iframes.forEach(iframe => {
		if (iframe.dataset.src !== undefined && iframe.dataset.src !== 'false' && isElementWithinTwoScreens(iframe)) {
			iframe.src = iframe.dataset.src;
			iframe.dataset.src = 'false';
		}
	})
}

const iframes = document.querySelectorAll('iframe');
const throttledOnScroll = throttle(onScroll, 350);

window.addEventListener('scroll', throttledOnScroll);
