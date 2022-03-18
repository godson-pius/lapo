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

const convertToBase64 = (type, string) => {
    return `data:${type};base64,${string}`
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

const viewBvnDetails = (e) => {
    const bvn = e.dataset.bvn;
    
    document.getElementById('loader').style.display = "block"
    const options = {
        method: 'POST',
        headers: {
            Accept: 'application/json',
            userid: '1644416326286',
            apiKey: 'C9bnOwkMY95pLtrTpIht',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            "searchParameter": bvn,
            "transactionReference": "",
            "verificationType": "BVN-FULL-DETAILS"
        })
    };

    fetch('https://api.verified.africa/sfx-verify/v3/id-service/', options)
        .then(response => response.json())
        .then(response => {
            document.getElementById('loader').style.display = "none"
            if (response.verificationStatus == "NOT VERIFIED") {
                alert("This Bvn is invalid")
            } else {
                document.getElementById('BvnContainer').style.display = "block"

                var url = convertToBase64("image/png", response.response.basicDetailBase64)
                document.getElementById('BvnImg').src = url
            }
        })
}

document.getElementById('previewBvn').addEventListener('click', () => {
    document.getElementById('BvnContainer').style.display = "none"
})