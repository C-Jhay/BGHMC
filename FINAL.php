<?php
include('config.php');
?>
<HTML>
<HEAD>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<STYLE>

	</STYLE>
<TITLE></TITLE>
<META></META>
<SCRIPT></SCRIPT>
</HEAD>
<BODY> 

<script type="text/javascript" src="FW.js"></script>
<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Step 4</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Step 5</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
            <p>Step 6</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
            <p>Step 7</p>
        </div>
    </div>
</div>


<form role="form" action="" method="POST">
  <div class="row setup-content" id="step-1">
    <div>
<table width = "100%" border = "0">
  <tr text-align = "center">
    <th>Professional Education & Training Office</th>
    <br></tr>
    <th>TECHNICAL REVIEW FORM</th>
  </tr>
  <tr>
    <label for="protocol"><td>Protocol Title</td></label>
    <th><input class="form-control" type="text" name="protocol" placeholder ="Enter Comments" required></th>
  </tr>
  <tr>
    <label for="principal"><td>Principal Investigator/s</td></label>
    <th><input class="form-control" type="text" name="principal" placeholder ="Enter Comments" required></th>
  </tr>
  <tr>
    <label for="co"><td>Co-Investigator/s</td></label>
    <th><input class="form-control" type="text" name="co" placeholder ="Enter Comments" required></th>
  </tr>
</table>
</form>
</div>
<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
</div>



<div class="row setup-content" id="step-2">
 <p>
    Instructions to the TECHNICAL REVIEWER:
    <br></br>
    Each review needs to be explicit and comprehensive. For each section of the protocol, the reviewer should ask the question, “Have they done it correctly?” Please place a check mark on the yes or no column as appropriate.
    <br></br>
    This provides guidance for the areas we would like you to comment on. Depending on your area of expertise, it is to be used as a guide only. We do not expect you to comment on every question but would be grateful if you can complete as many boxes are possible. 
  </p>
  <div>
<form action="" method="POST">
<table style="width:100%">
  <tr>
      <b style="font-family: "Times New Roman", Times, serif;">Proposal Title:</b>
      <th>Criterion</th> 
      <td>Yes</td> 
      <td>No</td> 
      <td>Reviewer’s Comments</td> 
  </tr>
  <tr>
    <td>1.  Research problem and sub-problems are stated in clear and specific terms</td>
    <th><input type="radio" name="A_choice_1" value="yes" required></th>
    <th><input type="radio" name="A_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="A_comment_1" required></th>
  </tr>
  <tr>
    <td>2.  Adequate discussion of the gaps in knowledge that will be filled in by the proposed research </td>
    <th><input type="radio" name="A_choice_2" value="yes" required></th>
    <th><input type="radio" name="A_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="A_comment_3" required></th>
  </tr>
  <tr>
    <td>3.  Significance of the research question explained-contribution of the research results to the practice of medicine/public health, etc. presented; discussed what good it will do to answer the research question/problem</td>
    <th><input type="radio" name="A_choice_3" value="yes" required></th>
    <th><input type="radio" name="A_choice_3" value="no" required></th>
    <th><input class="form-control" type="text" name="A_comment_3" required></th>
  </tr>
</table>
</form>
</div>
<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
</div>


<div class="row setup-content" id="step-3">
  <div>
    <form action="" method="POST">
<table style="width:100%">
    <tr>
      <b style="font-family: "Times New Roman", Times, serif;">Proposal Title:</b>
      <th>Criterion</th> 
      <td>Yes</td> 
      <td>No</td> 
      <td>Reviewer’s Comments</td> 
  </tr>
  <tr>
    <td>1.  All objectives are relevant and aligned with the research problem</td>
    <th><input type="radio" name="B_choice_1" value="yes" required></th>
    <th><input type="radio" name="B_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="B_comment_1" required></th>
  </tr>
  <tr>
    <td>2.  Objectives are stated in clear, specific, and measurable manner</td>
    <th><input type="radio" name="B_choice_2" value="yes" required></th>
    <th><input type="radio" name="B_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="B_comment_2" required></th>
  </tr>
  <tr>
    <td>3.  Specific objectives are relevant to the general objectives </td>
    <th><input type="radio" name="B_choice_3" value="yes" required></th>
    <th><input type="radio" name="B_choice_3" value="no" required></th>
    <th><input class="form-control" type="text" name="B_comment_3" required></th>
  </tr>
 </table>
</form>
</div>
<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
</div>



<div class="row setup-content" id="step-4">
  <div>
    <form action="" method="POST">
<table style="width:100%">
    <tr>
      <b style="font-family: "Times New Roman", Times, serif;">Proposal Title:</b>
      <th>Criterion</th> 
      <td>Yes</td> 
      <td>No</td> 
      <td>Reviewer’s Comments</td> 
  </tr>
  <tr>
    <td>1.  Background of the research problem is adequately discussed; characterized the research problem adequately in terms of its nature, magnitude, and distribution in the study population</td>
    <th><input type="radio" name="C_choice_1" value="yes" required></th>
    <th><input type="radio" name="C_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_1" required></th>
  </tr>
  <tr>
    <td>2.  Presented literature about the research problem</td>
    <th><input type="radio" name="C_choice_2" value="yes" required></th>
    <th><input type="radio" name="C_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_2" required></th>
  </tr>
  <tr>
    <td>3.  Reviewed literature on the proposed objectives of the study</td>
    <th><input type="radio" name="C_choice_3" value="yes" required></th>
    <th><input type="radio" name="C_choice_3" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_3" required></th>
  </tr>
  <tr>
    <td>4.  Gaps in the current state of knowledge identified</td>
    <th><input type="radio" name="C_choice_4" value="yes" required></th>
    <th><input type="radio" name="C_choice_4" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_4" required></th>
  </tr>
  <tr>
    <td>5.  Summarized the literature and presented a table summarizing the literature, including the limitations and biases of each research report</td>
    <th><input type="radio" name="C_choice_5" value="yes" required></th>
    <th><input type="radio" name="C_choice_5" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_5" required></th>
  </tr>
  <tr>
    <td>6.  Synthesized the literature identified themes/agreements and/or controversies/disagreements in the literature</td>
    <th><input type="radio" name="C_choice_6" value="yes" required></th>
    <th><input type="radio" name="C_choice_6" value="no" required></th>
    <th><input class="form-control" type="text" name="C_comment_6" required></th>
  </tr>
   </table>
</form>
</div>
<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
</div>



<div class="row setup-content" id="step-5">
    <div>
    <form action="" method="POST">
<table style="width:100%">
  <tr>
      <b style="font-family: "Times New Roman", Times, serif;">Proposal Title:</b>
      <th>Criterion</th> 
      <td>Yes</td> 
      <td>No</td> 
      <td>Reviewer’s Comments</td> 
  </tr>
  <tr>
    <td>1.  Schematic diagram showing the dependent, independent and confounding variables correctly constructed</td>
    <th><input type="radio" name="D_choice_1" value="yes" required></th>
    <th><input type="radio" name="D_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="D_comment_1" required></th>
  </tr>
  <tr>
    <td>2.  Briefly discussed the conceptual framework—explained the interrelationship among the variables found in the diagram</td>
    <th><input type="radio" name="D_choice_2" value="yes" required></th>
    <th><input type="radio" name="D_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="D_comment_2" required></th>
  </tr>
     </table>
</form>
</div>
<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
</div>



<div class="row setup-content" id="step-6">
<div>
    <form action="" method="POST">
<table style="width:100%">
  <tr>
      <b style="font-family: "Times New Roman", Times, serif;">Proposal Title:</b>
      <th>Criterion</th> 
      <td>Yes</td> 
      <td>No</td> 
      <td>Reviewer’s Comments</td> 
  </tr>
  <tr>
    <td>1.  Research design is appropriate given the objectives of the study</td>
    <th><input type="radio" name="E_choice_1" value="yes" required></th>
    <th><input type="radio" name="E_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="E_comment_1" required></th>
  </tr>
  <tr>
    <td>2.  Study population is identified and defined; the process of selection including inclusion and exclusion criteria are presented; the process of recruitment is discussed </td>
    <th><input type="radio" name="E_choice_2" value="yes" required></th>
    <th><input type="radio" name="E_choice_2" value="no" required></th>
    <th><input class="form-control" type="text" name="E_comment_2" required></th>
  </tr>
  <tr>
    <td>3.  Major variables of interest in the study are operationally defined and their categories are presented</td>
    <th><input type="radio" name="E_choice_3" value="yes" required></th>
    <th><input type="radio" name="E_choice_3" value="no" required></th>
    <th><input class="form-control" type="text" name="E_comment_3" required></th>
  </tr>
  <tr>
    <td>4.  Sampling design selected is appropriate and feasible; sample size is adequate relative to the research objectives</td>
    <th><input type="radio" name="E_choice_4" value="yes" required></th>
    <th><input type="radio" name="E_choice_4" value="no" required></th>
    <th><input class="form-control" type="text" name="E_comment_4" required></th>
  </tr>
  <tr>
    <td>5.  Data collection method is adequate and appropriate given the study objectives</td>
    <th><input type="radio" name="E_choice_5" value="yes" required></th>
    <th><input type="radio" name="E_choice_5" value="no" required></th>
    <th><input class="form-control" type="text" name="E_comment_5" required></th>
  </tr>
  <tr>
    <td>6.  Plans for data processing and analysis, including dummy tables, are presented; proposed method/s of data analysis is/are adequate and appropriate</td>
    <th><input type="radio" name="E_choice_6" value="yes" required></th>
    <th><input type="radio" name="E_choice_6" value="no" required></th>
    <th><input class="form-control" type="text" name="E_comment_6" required></th>
  </tr>
   <tr>
    <td>F.  Limitations of the study are discussed</td>
    <th><input type="radio" name="F_choice_1" value="yes" required></th>
    <th><input type="radio" name="F_choice_1" value="no" required></th>
    <th><input class="form-control" type="text" name="F_comment_1" required></th>
  </tr>
      </table>
</form>
</div>
<button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
</div>


<div class="row setup-content" id="step-7">
<div>
  <form action="" method="POST">   
    <p>
      Reviewer’s recommendation/action:
    </p>
    <p style ="padding-left: 239px;"><input type="radio" name="RECOM_choice_1" value="Approved with minor revisions" required>
      Approved with minor revisions
    </p>
    <p style ="padding-left: 239px;"><input type="radio" name="RECOM_choice_1" value="With major revisions to address issues" required>
      With major revisions to address issues
    </p>
    <p style ="padding-left: 239px;"><input type="radio" name="RECOM_choice_1" value="Disapproved" required>
      Disapproved
    </p>


<br></br>


  <p>
    Please use the space below for any additional comments. Use the additional sheets as necessary. Attach to this form are guide questions which may help the review.
  </p>
      <div>
    <form action="" method="POST">
<table style="width:100%">
  <tr>
    <td>Additional Comments:</td>
    <th><input class="form-control" type="text" name="ac" required></th>
  </tr>
  <tr>
    <td>Signature over printed name of reviewer</td>
    <th><input class="form-control" type="text" name="sign_1" required></th>
    <th><button type="submit" name="upload_1">UPLOAD</th>
  </tr>
  <tr>
    <td>Date</td>
    <th><input class="form-control" type="text" name="date" required></th>
  </tr>
  <tr>
    <td>Chair, Technical Review Board</td>
    <th><input class="form-control" type="text" name="sign_2" required></th>
    <th><button type="submit" name="upload_2">UPLOAD</th>
  </tr>
  <td>
      <button type="submit" name="submit" value="submit">SUBMIT</button>
      <button type="submit" name="view" value="submit">VIEW</button>
  </td>>
</table>
</form>
</div>
    <p style="text-align: right;">
    Adapted from PCHRD Technical Review Manual of Operations 
  </p>
    </div>
      <form action ="" method="POST">

</form>
</div>
</form>
</div>
</BODY>
</HTML>