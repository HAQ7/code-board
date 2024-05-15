if(document.getElementById('create')) {
    document.getElementById('create').addEventListener('click', function() {
        document.getElementById('create').remove();
        document.getElementById('createForm').style.display = 'flex';
    })
}

if (document.querySelector('.alert')) {
    setTimeout(() => {
        document.querySelector('.alert').classList.add('diappear');
        setTimeout(() => {
            document.querySelector('.alert').remove();
        }, 500);
    }, 2500);
}

if (document.querySelector('.rating')) {
    document.querySelectorAll('.rating').forEach((rating) => {
        rating.querySelectorAll('svg').forEach((svg)=> {
            svg.addEventListener('mouseenter', function() {
                const id = svg.getAttribute('number');
                if(rating.querySelector('.change-rating'))
                    rating.querySelector('.change-rating').classList.add('change-rating-hover');
                for (let i = 1; i <= id; i++) {
                    rating.querySelector(".svg" + i).style.fill = '#6c63ff';
                }
            });
            svg.addEventListener('mouseleave', function() {
                const id = svg.getAttribute('number');
                if(rating.querySelector('.change-rating'))
                    rating.querySelector('.change-rating').classList.remove('change-rating-hover');
                for (let i = 1; i <= id; i++) {
                    const svg = rating.querySelector(".svg" + i);
                    if (!svg.classList.contains('filled')) {
                        svg.style.fill = 'none';
                    }
                }
            });
        });
    });
    
}