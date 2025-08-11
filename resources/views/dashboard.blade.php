@extends('templates.template')

@section('main')
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">
            <div class="row task">
                <div class="col-xl-2 col-sm-4 col-6">
                    <div class="task-summary">
                        <div class="d-flex align-items-baseline">
                            <h2 class="text-primary count">8</h2>
                            <span>Not Started</span>
                        </div>
                        <p>Tasks assigne</p>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-4 col-6">
                    <div class="task-summary task-sven">
                        <div class="d-flex align-items-baseline">
                            <h2 class="text-purple count">7</h2>
                            <span>In Progress</span>
                        </div>
                        <p>Tasks assigne</p>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-4 col-6">
                    <div class="task-summary task-odd">
                        <div class="d-flex align-items-baseline">
                            <h2 class="text-warning count">13</h2>
                            <span>Testing</span>
                        </div>
                        <p>Tasks assigne</p>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-4 col-6">
                    <div class="task-summary task-eleven">
                        <div class="d-flex align-items-baseline">
                            <h2 class="text-danger count">11</h2>
                            <span>Awaiting</span>
                        </div>
                        <p>Tasks assigne</p>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-4 col-6">
                    <div class="task-summary">
                        <div class="d-flex align-items-baseline">
                            <h2 class="text-success count">21</h2>
                            <span>Complete</span>
                        </div>
                        <p>Tasks assigne</p>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-4 col-6">
                    <div class="task-summary task-even">
                        <div class="d-flex align-items-baseline">
                            <h2 class="text-danger count">16</h2>
                            <span>Pending</span>
                        </div>
                        <p>Tasks assigne</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive active-projects task-table">
                <div class="tbl-caption">
                    <h4 class="heading mb-0">Task</h4>
                </div>
                <table id="empoloyeestbl2" class="table">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class="form-check-input" id="checkAll" required="">
                            </th>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Assigned To</th>
                            <th>Tags</th>
                            <th class="text-end">Priority</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox3" required>
                                    <label class="form-check-label" for="customCheckBox3"></label>
                                </div>
                            </td>
                            <td><span>03</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>Create Frontend WordPress</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox4" required>
                                    <label class="form-check-label" for="customCheckBox4"></label>
                                </div>
                            </td>
                            <td><span>04</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>HTML To React Convert </h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox5" required>
                                    <label class="form-check-label" for="customCheckBox5"></label>
                                </div>
                            </td>
                            <td><span>05</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox6" required>
                                    <label class="form-check-label" for="customCheckBox6"></label>
                                </div>
                            </td>
                            <td><span>06</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>Complete Admin Dashboard Project</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="progress">In Progress</option>
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="Low">Low</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox7" required>
                                    <label class="form-check-label" for="customCheckBox7"></label>
                                </div>
                            </td>
                            <td><span>07</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>Create Frontend WordPress</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox8" required>
                                    <label class="form-check-label" for="customCheckBox8"></label>
                                </div>
                            </td>
                            <td><span>08</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>HTML To React Convert </h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox9" required>
                                    <label class="form-check-label" for="customCheckBox9"></label>
                                </div>
                            </td>
                            <td><span>09</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox10" required>
                                    <label class="form-check-label" for="customCheckBox10"></label>
                                </div>
                            </td>
                            <td><span>10</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>Complete Admin Dashboard Project</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="progress">In Progress</option>
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="Low">Low</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox11" required>
                                    <label class="form-check-label" for="customCheckBox11"></label>
                                </div>
                            </td>
                            <td><span>11</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>Create Frontend WordPress</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox12" required>
                                    <label class="form-check-label" for="customCheckBox12"></label>
                                </div>
                            </td>
                            <td><span>12</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>HTML To React Convert </h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <!-- start -->
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox13" required>
                                    <label class="form-check-label" for="customCheckBox13"></label>
                                </div>
                            </td>
                            <td><span>03</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>Create Frontend WordPress</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox14" required>
                                    <label class="form-check-label" for="customCheckBox14"></label>
                                </div>
                            </td>
                            <td><span>04</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>HTML To React Convert </h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                    <option value="pending">Pending</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox15" required>
                                    <label class="form-check-label" for="customCheckBox15"></label>
                                </div>
                            </td>
                            <td><span>05</span></td>
                            <td>
                                <div class="products">
                                    <div>
                                        <h6>HTML template Issue Complete</h6>
                                        <span>INV-100023456</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="default-select status-select">
                                    <option value="pending">Pending</option>
                                    <option value="testing">Testing</option>
                                    <option value="complete">Complete</option>
                                    <option value="progress">In Progress</option>
                                </select>
                            </td>
                            <td><span>06 Feb 2023</span></td>
                            <td>
                                <span>19 Feb 2023</span>
                            </td>
                            <td>
                                <div class="avatar-list avatar-list-stacked">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic555.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic1.jpg" class="avatar avatar-md rounded-circle" alt="">
                                    <img src="images/contacts/pic666.jpg" class="avatar avatar-md rounded-circle" alt="">
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-primary light border-0 me-1">Issue</span>
                                <span class="badge badge-secondary light border-0 ms-1">HTML</span>
                            </td>
                            <td class="text-end">
                                <select class="default-select status-select">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection