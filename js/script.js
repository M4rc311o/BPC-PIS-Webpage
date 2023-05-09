document.getElementById('ip-button').addEventListener('click', () => {
    fetch('clientIP.php')
        .then(res => res.text())
        .then(data => {
            alert(data);
        })
        .catch(err => {
            alert('Failed to get IP address');
        });
});
