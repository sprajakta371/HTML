<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="col-xxl-4">
            <div class="card border card-border-light">
              <div
                class="card-header d-sm-flex align-items-center justify-content-between"
              >
                <h6 class="card-title mb-0">NEW COMPANY</h6>
                <div class="page-title-right">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Add Company
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <div class="col-4">
                <a class="btn btn-primary" href="add-attribute.html"
                  ><i class="ri-add-circle-line"></i>&nbsp;NEW</a
                >
              </div>
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <!--add company form starts-->
                    <form action="javascript:void(0);" class="row g-3">
                      <!--Company Name-->
                      <div class="row my-3">
                        <div class="col-lg-3">
                          <label for="companyName" class="form-label"
                            >Company Name:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="companyName"
                            required
                          />
                        </div>
                      </div>
                      <!--Phone No.-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="phoneNo" class="form-label"
                            >Phone No.:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="tel"
                            class="form-control"
                            id="phoneNo"
                            required
                          />
                        </div>
                      </div>
                      <!--Email Id-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="emailId" class="form-label">Email:</label>
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="email"
                            class="form-control"
                            id="emailId"
                            required
                          />
                        </div>
                      </div>
                      <!--Billing Address-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="billingAddress" class="form-label"
                            >Billing Address:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="textarea"
                            class="form-control"
                            id="billingAddress"
                            required
                          />
                        </div>
                      </div>
                      <!--City-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="inputCity" class="form-label"
                            >City:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="inputCity"
                            required
                          />
                        </div>
                      </div>
                      <!--Pin Code-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="pinCode" class="form-label"
                            >Pin Code:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="pinCode"
                            required
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tag Button -->
        <div class="col-lg-8">
          <ul
            class="nav nav-pills nav-custom nav-custom-light mb-3"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                data-bs-toggle="tab"
                href="#other-details"
                role="tab"
              >
                Other Details
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                href="#bank-details"
                role="tab"
              >
                Bank Details
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                href="#kyc-details"
                role="tab"
              >
                KYC Details
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-bs-toggle="tab"
                href="#series-details"
                role="tab"
              >
                Series Details
              </a>
            </li>
          </ul>
        </div>
        <!--Other Details-->
        <div class="row tab-pane" id="other-details" role="tabpanel">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <form action="javascript:void(0);" class="row g-3">
                      <!--GST No.-->
                      <div class="row my-3">
                        <div class="col-lg-3">
                          <label for="gstNo" class="form-label">GST No.:</label>
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="gstNo"
                            required
                          />
                        </div>
                      </div>
                      <!--Pan No.-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="panNo" class="form-label">PAN No.:</label>
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="panNo"
                            required
                          />
                        </div>
                      </div>
                      <!--Place Of Supply-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="placeofSupply" class="form-label"
                            >Place of Supply:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="placeofSupply"
                            required
                          />
                        </div>
                      </div>
                      <!--State Code-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="stateCode" class="form-label"
                            >State Code:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="stateCode"
                            required
                          />
                        </div>
                      </div>
                      <!--Logo-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="logoImg" class="form-label">Logo:</label>
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="logoImg"
                          />
                        </div>
                      </div>
                      <!--Stamp-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="stampImg" class="form-label">Stamp</label>
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="stampImg"
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Bank Details-->
        <div class="row tab-pane" id="bank-details" role="tabpanel">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <!--Tax Bank Details starts-->
                    <h5 class="mb-sm-0">Tax Bank Details</h5>
                    <form action="javascript:void(0);" class="row g-3">
                      <!--A/C Name-->
                      <div class="row my-3">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >A/C Name:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--A/C Number-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="taxacNumber" class="form-label"
                            >A/C Number:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacNumber"
                            required
                          />
                        </div>
                      </div>
                      <!--Bank Name-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="taxbankName" class="form-label"
                            >Bank Name:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="taxbankName"
                            required
                          />
                        </div>
                      </div>
                      <!--Bank IFSC-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="taxbankIfsc" class="form-label"
                            >Bank IFSC:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="textarea"
                            class="form-control"
                            id="taxbankIfsc"
                            required
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Non-Tax Bank Details.-->
        <div class="row tab-pane" id="bank-details" role="tabpanel">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <!--Non-Tax Bank Details starts-->
                    <h5 class="mb-sm-0">Tax Bank Details</h5>
                    <form action="javascript:void(0);" class="row g-3">
                      <!--A/C Name-->
                      <div class="row my-3">
                        <div class="col-lg-3">
                          <label for="nontaxacName" class="form-label"
                            >A/C Name:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="nontaxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--A/C Number-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="nontaxacNumber" class="form-label"
                            >A/C Number:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="nontaxacNumber"
                            required
                          />
                        </div>
                      </div>
                      <!--Bank Name-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="nontaxbankName" class="form-label"
                            >Bank Name:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="text"
                            class="form-control"
                            id="nontaxbankName"
                            required
                          />
                        </div>
                      </div>
                      <!--Bank IFSC-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="nontaxbankIfsc" class="form-label"
                            >Bank IFSC:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            type="textarea"
                            class="form-control"
                            id="nontaxbankIfsc"
                            required
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--KYC Details-->
        <div class="row tab-pane" id="kyc-details" role="tabpanel">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <form action="javascript:void(0);" class="row g-3">
                      <!--GST File-->
                      <div class="row my-3">
                        <div class="col-lg-3">
                          <label for="gstFile" class="form-label"
                            >GST File:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="gstFile"
                          />
                        </div>
                      </div>
                      <!--PAN File-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="panFile" class="form-label"
                            >PAN File:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="panFile"
                          />
                        </div>
                      </div>
                      <!--CIN File-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="cinFile" class="form-label"
                            >CIN File:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="cinFile"
                          />
                        </div>
                      </div>
                      <!--TAN File-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="tanFile" class="form-label"
                            >TAN File:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="tanFile"
                          />
                        </div>
                      </div>
                      <!--Regst. File-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="regFile" class="form-label"
                            >Regst. File:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="regFile"
                          />
                        </div>
                      </div>
                      <!--Other File-->
                      <div class="row mb-3">
                        <div class="col-lg-3">
                          <label for="otherFile" class="form-label"
                            >Other File:</label
                          >
                        </div>
                        <div class="col-lg-5">
                          <input
                            class="form-control"
                            type="file"
                            id="otherFile"
                          />
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Series Details-->
        <div class="row tab-pane" id="series-details" role="tabpanel">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-lg-8">
                    <!--Tax Bank Details starts-->
                    <form action="javascript:void(0);" class="row g-3">
                      <!--LR Series-->
                      <div class="row my-3">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >LR Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--Tax Invoice Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Tax Invoice Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--Non Tax Invoice Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Non Tax Invoice Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--GST Invoice Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >GST Invoice Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Start"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Postfix"
                            required
                          />
                        </div>
                      </div>
                      <!--Payment Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Payment Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--Vendor Challan Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Vendor Challan Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--Customer Tds Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Customer Tds Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--Credit Note Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Credit Note Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--Debit Note Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Debit Note Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <!--Vendor Tds Series-->
                      <div class="row mb-1">
                        <div class="col-lg-3">
                          <label for="taxacName" class="form-label"
                            >Vendor Tds Series:</label
                          >
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            placeholder="Prefix"
                            required
                          />
                        </div>
                        <div class="col-lg-3">
                          <input
                            type="text"
                            class="form-control"
                            id="taxacName"
                            required
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-4">
                          <a class="btn btn-primary" href="add-company.html"
                            >Submit</a
                          >
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
