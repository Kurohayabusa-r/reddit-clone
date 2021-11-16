function changeText(e) {
    console.log(e.innerHTML.toLowerCase());
    if (e.innerHTML.toLowerCase() == 'joined') {
        e.innerHTML = 'Leave';
    }
    else if (e.innerHTML.toLowerCase() == 'leave') {
        e.innerHTML = 'Joined';
    }
}

function changeTextFollow(e) {
    if (e.innerHTML.toLowerCase() == 'followed') {
        e.innerHTML = 'Unfollow';
    }
    else if (e.innerHTML.toLowerCase() == 'unfollow') {
        e.innerHTML = 'Followed';
    }
}
