if (document.querySelector('.alert')) {
    setTimeout(() => {
        document.querySelector('.alert').classList.add('diappear');
        setTimeout(() => {
            document.querySelector('.alert').remove();
        }, 500);
    }, 2500);
}