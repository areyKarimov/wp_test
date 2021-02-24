export default (elem, interval) => {
    let elemHeight = elem.offsetHeight;
    let toTop = elem.getBoundingClientRect().top;
    if (
        toTop <= 0 &&
        toTop + elemHeight >= interval
) {
        return true;
    } else {
        return false;
    }
}