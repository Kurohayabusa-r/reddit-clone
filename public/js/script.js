function changeText(e) {
    console.log(e.innerHTML.toLowerCase());
    if (e.innerHTML.toLowerCase() == 'joined') {
        e.innerHTML = 'Leave';
    }
    else if (e.innerHTML.toLowerCase() == 'leave') {
        e.innerHTML = 'Joined';
    }
}
