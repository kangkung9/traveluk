document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('commentForm');
    const commentList = document.getElementById('commentList');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Ambil nilai input dari form
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const website = document.getElementById('website').value;
        const message = document.getElementById('message').value;

        // Buat elemen baru untuk komentar
        const commentItem = document.createElement('div');
        commentItem.classList.add('media');
        commentItem.innerHTML = `
            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
            <div class="media-body">
                <h6><a href="#">${name}</a> <small><i>Now</i></small></h6>
                <p>${message}</p>
                <button class="btn btn-sm btn-outline-primary">Reply</button>
            </div>
        `;

        // Tambahkan komentar ke daftar komentar
        commentList.appendChild(commentItem);

        // Reset form setelah mengirim komentar
        form.reset();
    });
});
