import React from 'react';
import ReactDOM from 'react-dom'; 
    
function SavePrintCharge() { 

    const shoot = (a) => {
        alert(a);
    }

    var frm = document.getElementById("frameBill").contentWindow;

    const print = () => {
        frm.focus();
        frm.print();
    }

    var biltot = document.getElementById("billtotal").value;
    
    let popcharge = "Total Charge Rp "+ biltot + "!";
    let textcharge = "Charge Rp " + biltot + "!";

    return (
        <div>
            <div class="row mt-4 text-center">
                <div class="col-6 mx-0">
                    <div class="row">
                        <button class="btn btn-info col-12 py-2 mx-auto" onClick={() => shoot("Saved!")}>
                        <h5>Save Bill</h5>
                        </button>
                    </div>
                </div>
                <div class="col-6 mx-0">
                    <div class="row">
                        <button class="btn btn-info col-12 py-2 mx-auto" onClick={print}>
                            <h5>Print Bill</h5>
                        </button>
                    </div>
                </div>            
            </div> 
            <div class="row text-center">
                <button class="btn btn-primary col-2 py-2"></button>
                <button class="btn btn-primary col-10 py-2" onClick={() => shoot(popcharge)}>
                    <h4> {textcharge} </h4>
                </button>
            </div>
        </div>
    );
}

ReactDOM.render(<SavePrintCharge />, document.getElementById('save-print-charge'));
