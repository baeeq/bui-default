<?php $title="表单简介"?>
<?php include("../templates/header.php"); ?>  
  <div class="container">
    <div class="row">
      <div class="span8">
        <h2>简介</h2>
        <p>在大量的实践过程中，我发现表单往往在细节上花费大量的事件，我力争把遇到的不顺之处，全部集成到控件中。</p>
        <p>在表单中我集成了以下功能：</p>
        <ol>
          <li>表单提示（placeholder或 tips）。</li>
          <li>验证：表单字段的验证，表单分组的验证，整个表单的验证。</li>
          <li>显示错误的层级：字段后，分组后，表单统一显示错误。</li>
          <li>表单联动：表单字段之间、字段与表单分组的联动，都可以通过简单的配置完成，避免写js。</li>
        </ol>
      </div>
      <div class="span16">
        <h2>示例</h2>
        <p>下面是简单的示例，内容在下面一一说明。</p>
        <form id="J_Form" class="well">
          <div>
            <label>必填最大值：</label><input name="a"  type="text" data-rules="{required:true,max:10}" />   
          </div>
          <div>
            <label for="">提示信息：</label><input name="b"  type="text" data-tip="{text:'请填写内容！',iconCls:'icon-ok'}" />  
          </div>
        </form>
        <pre class="prettyprint linenums">
&lt;form id="J_Form" class="well"&gt;
  &lt;div&gt;
    &lt;!-- data-rules 中声明验证规则 必填、最大字符10 --&gt;
    &lt;label&gt;必填最大值：&lt;/label&gt;
    &lt;input name="a"  type="text" data-rules="{required:true,max:10}" /&gt;   
  &lt;/div&gt;
  &lt;div&gt;
    &lt;!-- data-tip 中声明提示信息，和提示icon --&gt;
    &lt;label for=""&gt;提示信息：&lt;/label&gt;
    &lt;input name="b"  type="text" data-tip="{text:'请填写内容！',iconCls:'icon-ok'}" /&gt;  
  &lt;/div&gt;
&lt;/form&gt;
        </pre>
        <h3>JS声明</h3>
        <pre class="prettyprint linenums">
//引入表单模块          
BUI.use('form',function (Form) {
  //使用水平布局表单(horizontal form)
  var form = new Form.Form({
    srcNode : '#J_Form'
  });

  form.render();
});

        </pre>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <h2>表单分组</h2>
        <p>
          在表单中，我们经常把几个表单字段（输入框等）放在一起使用，例如：
        </p>
        <ol>
          <li>起始日期：2个输入框，一个表示开始日期，一个表示结束日期。</li>
          <li>城市联动框：多个选择框。</li>
          <li>显示或者隐藏某些字段：多个字段放在一起，共同显示、隐藏、清空等操作。</li>
        </ol>
        <p>所有上面这些，我们需要对多个字段一起显示错误，进行联合校验，进行统一的操作，所以我们提供表单分组使用<code>bui-form-group</code>样式标示。</p>
      </div>
      <div class="span16">
        <h2>示例</h2>
        <form id="J_Form1" class="well">
          <div id="group" class="bui-form-group">
            <label>起始日期：</label>
            <input name="start" class="calendar" type="text"><label>&nbsp;-&nbsp;</label><input name="end" class="calendar" type="text">
          </div>
        </form>
        <pre class="prettyprint linenums">
&lt;form id="J_Form1" class="well"&gt;
  &lt;div id="group" class="bui-form-group"&gt;
    &lt;label&gt;起始日期：&lt;/label&gt;
    &lt;input name="start" class="calendar" type="text"&gt;&lt;label&gt;&nbsp;-&nbsp;&lt;/label&gt;&lt;input name="end" class="calendar" type="text"&gt;
  &lt;/div&gt;
&lt;/form&gt;          
        </pre>
        <h3>JS声明</h3>
        <pre class="prettyprint linenums">
var form1 = new Form.Form({
  srcNode : '#J_Form1',
  //联合校验起始日期
  validators : {
    '#group' : function(record){
      if(record.start > record.end){
        return '结束日期必须大于起始日期！';
      }
    }
  }
});

form1.render();
        </pre>
      </div>
    </div>
  </div>
<?php include("../templates/script.php"); ?> 
<script type="text/javascript">
  //引入表单模块          
  BUI.use('form',function (Form) {
    //使用水平布局表单(horizontal form)
    var form = new Form.Form({
      srcNode : '#J_Form'
    });

    form.render();

    var form1 = new Form.Form({
      srcNode : '#J_Form1',
      //联合校验起始日期
      validators : {
        '#group' : function(record){
          if(record.start > record.end){
            return '结束日期必须大于起始日期！';
          }
        }
      }
    });

    form1.render();
  });
</script>
<?php include("../templates/footer.php"); ?>  