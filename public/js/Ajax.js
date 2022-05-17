class MyAjax {
    constructor(token) {
        this.token = token;
    }

    getAdat(apiVegpont, tomb, myCallback) {
        $.ajax({
            url: apiVegpont,
            type: "GET",
            success: function (result) {
                tomb.splice(0, tomb.length);
                result.forEach((value) => {
                    tomb.push(value);
                });

                myCallback(tomb);
            },
        });
    }
}