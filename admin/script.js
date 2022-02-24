
const approveLoan = (e) => {
    const id = e.dataset.id;
    const conf = confirm('Are you sure you want to approve loan?');

    if (conf) {
        fetch(`api.php?loan=${id}`).then(e => e).then(e => e.text()).then(e => {
            if (e == "success") {
                alert('Your loan has been approved.')
                window.location.reload()
            }
        }).catch(e => {
            alert('Failed to approve the loan')
        })
    }
}

const declineLoan = (e) => {
    const id = e.dataset.id;
    const conf = confirm('Are you sure you want to decline loan?');

    if (conf) {
        fetch(`api.php?dloan=${id}`).then(e => e).then(e => e.text()).then(e => {
            if (e == "success") {
                alert('Your loan has been declined.')
                window.location.reload()
            }
        }).catch(e => {
            alert('Failed to decline the loan')
        })
    }
}

const removeUser = (e) => {
    const id = e.dataset.id;
    const conf = confirm('Are you sure you want to remove user?');

    if (conf) {
        fetch(`api.php?user=${id}`).then(e => e).then(e => e.text()).then(e => {
            if (e == "success") {
                alert('User have been removed.')
                window.location.reload()
            }
        }).catch(e => {
            alert('Failed to remove user')
        })
    }
}