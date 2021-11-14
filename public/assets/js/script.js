/**
 * @Script js for (Template/Project Name)
 *
 * @project     - Project Name
 * @author      - 
 * @created_by  - 
 * @created_at  - 
 * @modified_by -
 */



/**
 * ========================================================
 * this function execute when window properly loaded
 * ===========================================================
 */

$(window).on('load', function () {

    // add class by document path
    $(function () {
        var CurrentUrl = document.URL;
        var CurrentUrlEnd = CurrentUrl.split('/').filter(Boolean).pop();

        $(".navbar-nav a").each(function () {
            var ThisUrl = $(this).attr('href');
            var ThisUrlEnd = ThisUrl.split('/').filter(Boolean).pop();
            if (ThisUrlEnd == CurrentUrlEnd) {
                $(this).addClass('active');
                if ($('.navbar-nav .dropdown-item').hasClass('active')) {
                    $(this).closest('.dropdown-menu').addClass('show');
                    $(this).closest('.dropdown').find('.dropdown-toggle').addClass('active');
                }
            }
        });
    });

});



/**
 * ========================================================
 * this function execute when DOM element ready 
 * ===========================================================
 */

$(document).ready(function () {




    // add application custom form field
    // application form group sortable
    $(function () {
        if ($(".sortable").length) {
            $(".sortable").sortable({
                revert: true,
                handle: '.btn-handle',
                cancel: ''
            }).disableSelection();;
        }

        if ($('.btn-add-field').length) {
            $('#form-body').on('click', '.btn-remove', function (e) {
                e.preventDefault();
                $(this).closest('.form-group').remove();
            });

            $('form.add-field-form').submit(function (e) {
                e.preventDefault();
                let label = $('#add-input').val() || null
                let type = $('#add-input-type').val() || null

                if ((label !== null || label !== undefined) && (type !== null || type !== undefined)) {
                    let field = `
                            <div class="row align-items-center form-group mb-3">
								<label for="#" class="col-lg-3 col-form-label">${label}:</label>
								<div class="col flex-grow-1">
									<input type=${type} class="form-control rounded-pill ps-4" id="#"
										placeholder=${label} />
								</div>
								<div class="col flex-grow-0 d-flex align-items-center form-group-action">
									<button type="button" class="btn btn-sm btn-remove btn-danger">
										<i class="bi bi-x"></i>
									</button>
									<button type="button" class="btn btn-handle">
										<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20 16.25L28.705 21.3275L24.9887 22.39L27.645 26.9913L25.48 28.2413L22.8238 23.6413L20.045 26.3288L20 16.25ZM17.5 7.5H20V10H26.25C26.5815 10 26.8995 10.1317 27.1339 10.3661C27.3683 10.6005 27.5 10.9185 27.5 11.25V16.25H25V12.5H12.5V25H17.5V27.5H11.25C10.9185 27.5 10.6005 27.3683 10.3661 27.1339C10.1317 26.8995 10 26.5815 10 26.25V20H7.5V17.5H10V11.25C10 10.9185 10.1317 10.6005 10.3661 10.3661C10.6005 10.1317 10.9185 10 11.25 10H17.5V7.5ZM5 17.5V20H2.5V17.5H5ZM5 12.5V15H2.5V12.5H5ZM5 7.5V10H2.5V7.5H5ZM5 2.5V5H2.5V2.5H5ZM10 2.5V5H7.5V2.5H10ZM15 2.5V5H12.5V2.5H15ZM20 2.5V5H17.5V2.5H20Z"
												fill="black" />
										</svg>
									</button>
								</div>
							</div>`;


                    function inputReset() {
                        $('#add-input').val('');
                        $('#add-input-type option').prop('selected', function () {
                            return this.defaultSelected;
                        });
                    }


                    if ($('#form-body .form-group').length > 0) {
                        $('#form-body .form-group:last').after(field);
                        inputReset();
                        $('#addFieldModal').modal('toggle');
                    } else {
                        $('#form-body').append(field);
                        inputReset();
                        $('#addFieldModal').modal('toggle');
                    }
                }
            });
        }
    });


    // candidate add
    $(function () {
        if ($('#btn-candidate-add').length) {
            $('#btn-candidate-add').on('click', function (e) {
                e.preventDefault();
                let candidateNumber = $('#candidate-number').val() || null;
                let ballot = function (id) {
                    let memberID = id + Math.floor(Math.random() * 999999);
                    return `
                        <div class="candidate-widget pb-1 border-bottom mb-3">
                            <div class="row gx-1">
                                <div class="col-lg-3">
                                    <div class="widget-box border p-3">
                                        <p class="mb-0 lh-base candidate-name">
                                            <strong class="candidate-text">Candidate Name</strong> <br /> 
                                            <span class="candidate-id">(ID : ${memberID})</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget-box border p-3">
                                        <img src="assets/img/user-2.jpg" alt="img" class="img-fluid candidate-img" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="widget-box border-start border-top border-bottom p-3">
                                        <input type="text" class="form-control rounded-pill candidate-name-control" placeholder="Enter Candidate Name" />
                                        <label for=${memberID} class="upload-file position-relative d-block w-100 text-start p-2 d-block border rounded-pill">
                                            <p class="title text-muted ps-1 fw-normal mb-0"> <var><small>Browse Image</small></var> </p>
                                            <input id=${memberID} type="file" class="form-control candidate-img-file d-none" />
                                            <span class="d-inline-block bg-primary position-absolute end-0 top-0 rounded-pill p-1 px-4 mt-1 me-1">
                                                <i class="bi bi-upload text-light"></i>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> `;
                }

                if (candidateNumber !== null && candidateNumber > 0 && candidateNumber < 100) {
                    for (let i = 1; i <= candidateNumber; i++) {
                        $('#candidates').append(ballot(i));
                    }
                    $('#create-candidate-form .btn-save').removeClass('d-none');
                } else {
                    alert('The number of candidates is required in the field and you need to input less than 100 at once !!')
                }
            });

            $('#candidates').on('input', '.candidate-name-control', function (e) {
                e.preventDefault();
                let cName = `${$(this).val()}`;
                $(this).closest('.candidate-widget').find('.candidate-name > .candidate-text').text(`${cName}`);
            });

            $('#candidates').on("change", ".candidate-img-file", function (event) {
                let imgURL = URL.createObjectURL(event.target.files[0]);
                $(this).closest('.candidate-widget').find('.candidate-img').attr('src', imgURL);
            });
        }
    });


    // eVote-table-toggleAction
    $(function () {
        if ($('.eVote-table-toggleAction').length) {
            $('.eVote-table-toggleAction').on('click', '.btn', function (e) {
                e.preventDefault();
                $('.eVote-table-toggleAction > .btn').removeClass('active');
                $(this).addClass('active');
                if ($(e.target).hasClass('btn-show')) {
                    $(this).closest('.eVote-table').find('.voter-list').removeClass('d-none');
                } else if ($(e.target).hasClass('btn-hide')) {
                    $(this).closest('.eVote-table').find('.voter-list').addClass('d-none');
                }
            })
        }
    });



});
