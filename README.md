# aa478-add-company
<p align="center">
<img src="https://gedlynk.com/wp-content/uploads/2015/11/Infusionsoft-Logo-EPS-vector-image-2.png" style="width:35%;"/>
</p>

<h3>For more info about the infusionsoft syntax Click <a href="https://developer.infusionsoft.com/docs/xml-rpc/#contact">here</a></h3>
<h4>Current URL: https://scaleupmarketing.asia/httpscripts/aa478/note/add_company.php</h4>
<p>Script Description: 
 When HTTP POST REQUEST is triggered via a sequence from the aa48.infusionsoft.com app
 carrying the variables company & contactId
  
 It will fetch the CompanyID from the infusionsoft system using the Company name data that we passed from the variable "Company".<br>
 <br>
 After fetching the data, it will scan the variable "CompanyID" if it is empty or not<br>
 <br>
 <strong>IF the variable "CompanyID" is empty:</strong><br><br>
 It will create a company using the data that we passed from the variable "company".<br>
 After creating the company, it will assign the contact using the "contactId" into the newly created company.<br><br>
 <strong>ELSE IF the "company" variable is not empty:</strong> 
 It will update the contact company info by updating the current "companyid" on the contact. thus making sure that<br>
 the company on the contact is correct.
</p>
