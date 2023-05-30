"use strict";
var KTUsersAddUser = function () {
    const t = document.getElementById("kt_modal_add_user"), e = t.querySelector("#kt_modal_add_user_form"),
        n = new bootstrap.Modal(t);
    return {
        init: function () {
            (() => {
                var o = FormValidation.formValidation(e, {
                    fields: {
                        user_name: {validators: {notEmpty: {message: "Full name is required"}}},
                        user_email: {validators: {notEmpty: {message: "Valid email address is required"}}}
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                });
                const i = t.querySelector('[data-kt-users-modal-action="submit"]');
                // i.addEventListener("click", (t => {
                //                 //     t.preventDefault(), o && o.validate().then((function (t) {
                //                 //         console.log("validated!"), "Valid" == t ? (i.setAttribute("data-kt-indicator", "on"), i.disabled = !0, setTimeout((function () {
                //                 //             i.removeAttribute("data-kt-indicator"), i.disabled = !1, Swal.fire({
                //                 //                 text: "Form has been successfully submitted!",
                //                 //                 icon: "success",
                //                 //                 buttonsStyling: !1,
                //                 //                 confirmButtonText: "Ok, got it!",
                //                 //                 customClass: {confirmButton: "btn btn-primary"}
                //                 //             }).then((function (t) {
                //                 //                 t.isConfirmed && n.hide()
                //                 //             }))
                //                 //         }), 2e3)) : Swal.fire({
                //                 //             text: "Sorry, looks like there are some errors detected, please try again.",
                //                 //             icon: "error",
                //                 //             buttonsStyling: !1,
                //                 //             confirmButtonText: "Ok, got it!",
                //                 //             customClass: {confirmButton: "btn btn-primary"}
                //                 //         })
                //                 //     }))
                //                 // })),


                    t.querySelector('[data-kt-users-modal-action="cancel"]').addEventListener("click", (t => {
                    t.preventDefault(), Swal.fire({
                        text: "Are You sure?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes",
                        cancelButtonText: "Back",
                        customClass: {confirmButton: "btn btn-danger", cancelButton: "btn btn-active-light"}
                    }).then((function (t) {
                        t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "Nothing is Canceled",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "oki",
                            customClass: {confirmButton: "btn btn-primary"}
                        })
                    }))
                })), t.querySelector('[data-kt-users-modal-action="close"]').addEventListener("click", (t => {
                    t.preventDefault(), Swal.fire({
                        text: "Are You Sure?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes",
                        cancelButtonText: "Back",
                        customClass: {confirmButton: "btn btn-danger", cancelButton: "btn btn-active-light"}
                    }).then((function (t) {
                        t.value ? (e.reset(), n.hide()) : "cancel" === t.dismiss && Swal.fire({
                            text: "Nothing is Canceled",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "oki",
                            customClass: {confirmButton: "btn btn-primary"}
                        })
                    }))
                }))
            })()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTUsersAddUser.init()
}));
