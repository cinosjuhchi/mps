/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: contact user list Js File
*/

var url = "build/json/";
var userListData = '';
var editList = false;

//contact user list by json
var getJSON = function (jsonurl, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url + jsonurl, true);
    xhr.responseType = "json";
    xhr.onload = function () {
        var status = xhr.status;
        if (status === 200) {
            callback(null, xhr.response);
        } else {
            callback(status, xhr.response);
        }
    };
    xhr.send();
};

// get json
getJSON("contact-user-list.json", function (err, data) {
    if (err !== null) {
        console.log("Something went wrong: " + err);
    } else {
        // Modifikasi data JSON
        var customData = [
            { nama: "Rahimi bin Saufi", jawatan: "Guru Besar", email:"rahimi@mail.com", jawatanApp: "Admin" },
            { nama: "Marina binti Idris", jawatan: "GPK Pentadbiran", email:"marina@mail.com", jawatanApp: "Admin" },
            { nama: "Norazidi bin Che Amat", jawatan: "GPK Hal Ehwal Murid", email:"norazidi@mail.com", jawatanApp: "Admin" },
            { nama: "Faridah Hanim binti Ismail", jawatan: "GPK Korikulum", email:"faridah.hanim@mail.com", jawatanApp: "Admin" },
            { nama: "Lee Hock Chan", jawatan: "GPK Pendidikan Khas", email:"leehockchan@mail.com", jawatanApp: "Admin" },
            { nama: "Abdullah Sani bin Husein", jawatan: "GPK Pendidikan Khas", email:"abdullah.sani@mail.com", jawatanApp: "Admin" },
            { nama: "Maliki bin Ayub Khan", jawatan: "Guru Bimbingan", email:"maliki@mail.com", jawatanApp: "Pengguna" },
            { nama: "Suzana binti Muhammad", jawatan: "Guru Penyelaras Bestari", email:"suzana@mail.com", jawatanApp: "Super Admin" },
            { nama: "Suzana binti Muhammad", jawatan: "Guru Pepustakaan dan Media", email:"abc@mail.com", jawatanApp: "Super Admin" },
            { nama: "Razuki bin Rauf", jawatan: "Guru Data", email:"abc@mail.com", jawatanApp: "Super Admin" },
            // Tambahkan entri lainnya sesuai kebutuhan Anda
        ];

        // Assign data custom ke data asli
        for (var i = 0; i < customData.length; i++) {
            if (data[i]) {
                data[i].nama = customData[i].nama;
                data[i].jawatan = customData[i].jawatan;
                data[i].email = customData[i].email;
                data[i].jawatanApp = customData[i].jawatanApp;
            }
        }

        userListData = data;
        loadUserList(userListData);
    }
});


// load table list data
function loadUserList(datas) {
    $('#userList-table').DataTable({
        data: datas,
        "bLengthChange": false,
        order: [[0, 'asc']],
        language: {
            oPaginate: {
                sNext: '<i class="mdi mdi-chevron-right"></i>',
                sPrevious: '<i class="mdi mdi-chevron-left"></i>',
            }
        },
        columns: [
            {
                data: null,
                render: function (data, type, full, meta) {
                    return meta.row + 1;
                }
            },
            {
                data: null,
                render: function (data, type, full) {
                    var isUserProfile = full.memberImg ? '<img src="' + full.memberImg + '" alt="" class="member-img img-fluid d-block rounded-circle" />'
                        : '<div class="avatar-title rounded-circle text-uppercase">' + full.nickname + '</div>';
                    var profileImage = '<div class="avatar-xs img-fluid rounded-circle">' + isUserProfile + '</div>';
                    var nama = '<div class="d-flex align-items-center"><div class="me-2">' + profileImage + '</div><div><strong>' + full.nama + '</strong></div></div>';
                    return nama;
                }
            },
            { data: "jawatan" },
            {
                data: null,
                render: function (data, type, full) {
                    return full.email ? '<a href="mailto:' + full.email + '">' + full.email + '</a>' : '';
                }
            },
            { data: "jawatanApp" },
            {
                data: null,
                'bSortable': false,
                render: function (data, type, full) {
                    return '<ul class="list-inline font-size-20 contact-links mb-0">\
                    \
                    <li class="list-inline-item">\
                    <div class="dropdown">\
                        <a href="javascript: void(0);" class="dropdown-toggle card-drop px-2" data-bs-toggle="dropdown" aria-expanded="false">\
                            <i class="mdi mdi-dots-horizontal font-size-18"></i>\
                        </a>\
                        <ul class="dropdown-menu dropdown-menu-end">\
                            <li><a href="#newContactModal" data-bs-toggle="modal" class="dropdown-item edit-list" data-edit-id="'+ full.id + '"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li>\
                            <li><a href="#removeItemModal" data-bs-toggle="modal" class="dropdown-item remove-list" data-remove-id="'+ full.id + '"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li>\
                        </ul>\
                    </div>\
                    </li>\
                </ul>';
                },
            },
        ],
        drawCallback: function (oSettings) {
            // your drawCallback logic here
        },
    });

    $('#searchTableList').keyup(function () {
        $('#userList-table').DataTable().search($(this).val()).draw();
    });
    $(".dataTables_length select").addClass('form-select form-select-sm');
    $('.dataTables_paginate').addClass('pagination-rounded');
    $(".dataTables_filter").hide();
}





// Select2
$("#tag-input").select2();

// create user modal form
var createContactForms = document.querySelectorAll('.createContact-form')
Array.prototype.slice.call(createContactForms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            event.preventDefault();
            var memberImg = document.getElementById("member-img").src;
            var memberImgValue = memberImg.substring(
                memberImg.indexOf("/as") + 1
            );

            var memberImageValue
            if (memberImgValue == "build/images/users/user-dummy-img.jpg") {
                memberImageValue = ""
            } else {
                memberImageValue = memberImg
            }

            var userName = document.getElementById('username-input').value;
            var str = userName;
            var matches = str.match(/\b(\w)/g);
            var acronym = matches.join(''); // JSON
            var nicknameValue = acronym.substring(0, 2)

            var designationInput = document.getElementById('designation-input').value;
            var emailInput = document.getElementById('email-input').value;
            var tagInputFieldValue = $("#tag-input").val();

            if (userName !== "" && designationInput !== "" && emailInput !== "" && !editList) {
                var newUserId = findNextId();

                var newList = {
                    "id": newUserId,
                    "memberImg": memberImageValue,
                    "nickname": nicknameValue,
                    "userName": userName,
                    "designation": designationInput,
                    "email": emailInput,
                    "tags": tagInputFieldValue,
                    "projects": "--"
                };

                userListData.push(newList)
            }else if(userName !== "" && designationInput !== "" && emailInput !== "" && editList){
                var getEditid = 0;
                getEditid = document.getElementById("userid-input").value;
                userListData = userListData.map(function (item) {
                    if (item.id == getEditid) {
                        var editObj = {
                            'id': getEditid,
                            "memberImg": memberImageValue,
                            "nickname": nicknameValue,
                            "userName": userName,
                            "designation": designationInput,
                            "email": emailInput,
                            'tags': tagInputFieldValue,
                            "projects": item.projects
                        }

                        return editObj;
                    }
                    return item;
                });
                editList = false;
            }

            if ($.fn.DataTable.isDataTable('#userList-table')) {
                $('#userList-table').DataTable().destroy();
            }
            loadUserList(userListData)
            $("#newContactModal").modal("hide");
        }
        form.classList.add('was-validated');
    }, false)
});


function fetchIdFromObj(member) {
    return parseInt(member.id);
}

function findNextId() {
    if (userListData.length === 0) {
        return 0;
    }
    var lastElementId = fetchIdFromObj(userListData[userListData.length - 1]),
        firstElementId = fetchIdFromObj(userListData[0]);
    return (firstElementId >= lastElementId) ? (firstElementId + 1) : (lastElementId + 1);
}

// member image
document.querySelector("#member-image-input").addEventListener("change", function () {
    var preview = document.querySelector("#member-img");
    var file = document.querySelector("#member-image-input").files[0];
    var reader = new FileReader();
    reader.addEventListener("load",function () {
        preview.src = reader.result;
    },false);
    if (file) {
        reader.readAsDataURL(file);
    }
});


// Fungsi untuk menambahkan pengguna
function addContactList() {
    var userName = document.getElementById("username-input").value;
    var designationInput = document.getElementById("jawatan-input").value;
    var emailInput = document.getElementById("email-input").value;
    var jawatanApp = document.getElementById("jawatanApp").value;

    if (userName !== "" && designationInput !== "" && emailInput !== "" && jawatanApp !== "") {
        userListData.push({
            nama: userName,
            jawatan: designationInput,
            email: emailInput,
            jawatanApp: jawatanApp
        });
        loadUserList(userListData); // Memanggil fungsi loadUserList() dengan data yang diperbarui
        document.getElementById("username-input").value = '';
        document.getElementById("jawatan-input").value = '';
        document.getElementById("email-input").value = '';
        document.getElementById("jawatanApp").value = '';
    }
}

// add list event
Array.from(document.querySelectorAll(".addContact-modal")).forEach(function(elem) {
    elem.addEventListener('click', function (event) {
        editList = false;
        document.getElementById("createContact-form").classList.remove("was-validated");
        document.getElementById("newContactModalLabel").innerHTML = "Add Contact";
        document.getElementById("addContact-btn").innerHTML = "add";
        document.getElementById("userid-input").value = "";
        document.getElementById("username-input").value = "";
        document.getElementById("email-input").value = "";
        document.getElementById("designation-input").value = "";
        document.getElementById("member-img").src = "build/images/users/user-dummy-img.jpg";
        $("#tag-input").select2({
            multiple: true,
        });
        $('#tag-input').val("").trigger('change');
    });
});

// remove item
function removeItem() {
    var getid = 0;
    Array.from(document.querySelectorAll(".remove-list")).forEach(function (item) {
        item.addEventListener('click', function (event) {
            getid = item.getAttribute('data-remove-id');
            document.getElementById("remove-item").addEventListener("click", function () {
                function arrayRemove(arr, value) {
                    return arr.filter(function (ele) {
                        return ele.id != value;
                    });
                }
                var filtered = arrayRemove(userListData, getid);

                userListData = filtered;
                if ( $.fn.DataTable.isDataTable('#userList-table') ) {
                    $('#userList-table').DataTable().destroy();
                }
                loadUserList(userListData);
                $("#removeItemModal").modal("hide");
            });
        });
    });
}
