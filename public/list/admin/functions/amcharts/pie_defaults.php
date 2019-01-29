<?php
  require_once(dirname(__FILE__) . '/common.php');
  header("Content-type: text/xml");
?>
<!-- Value between [] brackets, for example [#FFFFFF] shows default value which is used if this parameter is not set -->
<!-- This means, that if you are happy with this value, you can delete this line at all and reduce file size         -->
<!-- value or explanation between () brackets shows the range or type of values you should use for this parameter    -->
<!-- the top left corner has coordinates x = 0, y = 0                                                                -->

<settings>
  <width></width>                                             <!-- [] (Number) if empty, will be equal to width of your flash movie -->
  <height></height>                                           <!-- [] (Number) if empty, will be equal to height of your flash movie -->

  <data_type>xml</data_type>                                  <!-- [xml] (xml / csv) -->
  <csv_separator>;</csv_separator>                            <!-- [;] (string) csv file data separator (you need it only if you are using csv file for your data) -->
  <skip_rows>0</skip_rows>                                    <!-- [0] (Number) if you are using csv data type, you can set the number of rows which should be skipped here -->
  <font>Arial</font>                                          <!-- [Arial] (font name) use device fonts, such as Arial, Times New Roman, Tahoma, Verdana... -->
  <text_size>10</text_size>                                   <!-- [11] (Number) text size of all texts. Every text size can be set individually in the settings below -->
  <text_color>#000000</text_color>                            <!-- [#000000] (hex color code) main text color. Every text color can be set individually in the settings below-->
  <decimals_separator>.</decimals_separator>                  <!-- [,] (string) decimal separator. Note, that this is for displaying data only. Decimals in data xml file must be separated with a dot -->
  <thousands_separator>,</thousands_separator>                <!-- [ ] (string) thousand separator -->
  <reload_data_interval></reload_data_interval>               <!-- [0] (Number) how often data should be reloaded (time in seconds) -->
  <redraw>true</redraw>                                           <!-- [false] (true / false) if your chart's width or height is set in percents, and redraw is set to true, the chart will be redrawn then screen size changes -->
  <add_time_stamp>true</add_time_stamp>                      <!-- [false] (true / false) if true, a unique number will be added every time flash loads data. Mainly this feature is useful if you set reload _data_interval -->
  <precision>0</precision>                                    <!-- [2] (Number) shows how many numbers should be shown after comma for calculated values (percents) -->
  <export_image_file></export_image_file>                     <!-- [] (filename) If you set filename here context menu (then user right clicks on flash movie) "Export as image" will appear. This will allow user to export chart as an image. For php users, use amline/export.php, for .net - amline/export.aspx -->
                                                              <!-- Note, that this works only on a web server -->
  <exclude_invisible></exclude_invisible>                     <!-- [false] (true / false) whether to exclude invisible slices (where alpha=0) then calculating percent values or not -->

  <pie>
    <x><?php
      echo isset($_GET['x_position']) ? $_GET['x_position'] : 350;
      ?></x>                                                   <!-- [](Number) If left empty, will be positioned in the center -->
    <y><?php
      echo isset($_GET['y_position']) ? $_GET['y_position'] : 160;
      ?></y>                                                   <!-- [](Number) If left empty, will be positioned in the center - 20px -->
    <radius><?php
      echo isset($_GET['radius']) ? $_GET['radius'] : 80;
      ?></radius>                                       <!-- [] (Number) If left empty, will be 25% of your chart smaller side -->
    <inner_radius></inner_radius>                             <!-- [0] (Number) the radius of the hole (if you want to have donut, use > 0) -->
    <height>2</height>                                        <!-- [0] (Number) pie height (for 3D effect) -->
    <angle>0</angle>                                          <!-- [0] (0 - 90) lean angle (for 3D effect) -->
    <outline_color></outline_color>                           <!-- [#FFFFFF] (hex color code) -->
    <outline_alpha></outline_alpha>                           <!-- [0] (Number) -->
    <base_color></base_color>                                 <!-- [] (hex color code) color of first slice -->
    <brightness_step></brightness_step>                       <!-- [20] (-100 - 100) if base_color is used, every next slice is filled with lighter by brightnessStep % color. Use negative value if you want to get darker colors -->
    <colors>0xF98F25,0xFFBE21,0x84B221,0x6379AD,0xF74F25,0x2579F7,0xA925F5,0xE54572,0x429CBD,0x9CBD42</colors>                                         <!-- [0xFF0F00,0xFF6600,0xFF9E01,0xFCD202,0xF8FF01,0xB0DE09,0x04D215,0x0D8ECF,0x0D52D1,0x2A0CD0,0x8A0CCF,0xCD0D74] (hex color codes separated by comas) -->
    <link_target></link_target>                               <!-- [] (_blank, _top...) If pie slice has a link this is link target -->
    <alpha></alpha>                                           <!-- [100] (0 - 100) slices alpha. You can set individual alphas for every slice in data file. If you set alpha to 0 the slice will be inactive for mouse events and data labels will be hidden. This allows you to make not full pies and donuts. -->
  </pie>

  <animation>
    <start_time></start_time>                                <!-- [0] (Number) fly-in time in seconds. Leave 0 to appear instantly -->
    <start_effect>strong</start_effect>                       <!-- [bounce] (bounce, regular, strong) -->
    <start_radius></start_radius>                             <!-- [] (Number) if left empty, will use pie.radius * 5 -->
    <start_alpha>0</start_alpha>                              <!-- [0] (Number) -->
    <pull_out_on_click></pull_out_on_click>                   <!-- [true] (true / false) whether to pull out slices when user clicks on them (or on legend entry) -->
    <pull_out_time>1.5</pull_out_time>                        <!-- [0] (number) pull-out time (then user clicks on the slice) -->
    <pull_out_effect>Bounce</pull_out_effect>                 <!-- [bounce] (bounce, regular, strong) -->
    <pull_out_radius></pull_out_radius>                       <!-- [] (Number) how far pie slices should be pulled-out then user clicks on them (if left empty, uses 20% of pie radius) -->
    <pull_out_only_one></pull_out_only_one>                   <!-- [false] (true / false) if set to true, when you click on any slice, all other slices will be pushed in -->
  </animation>

  <data_labels>
    <radius>10</radius>                                         <!-- [30] (Number) distance of the labels from the pie. Use negative value to place labels on the pie -->
    <text_color></text_color>                                 <!-- [text_color] (hex color code) -->
    <text_size></text_size>                                   <!-- [text_size] (Number) -->
    <max_width>140</max_width>                                   <!-- [120] (Number) -->
    <show>
       <![CDATA[{title}: {value}]]>                        <!-- [] ({value} {title} {percents}) You can format any data label: {value} - will be replaced with value and so on. You can add your own text or html code too. -->
    </show>
    <show_lines></show_lines>                                 <!-- [true] (true / false) whether to show lines from slices to data labels or not -->
    <line_color></line_color>                                 <!-- [#000000] (hex color code) -->
    <line_alpha></line_alpha>                                 <!-- [15] (Number) -->
    <hide_labels_percent><?php
      echo isset($_GET['hide_labels_percent']) ? $_GET['hide_labels_percent'] : 0;
      ?></hide_labels_percent>              <!-- [0] data labels of slices less then skip_labels_percent% will be hidden (to avoid label overlapping if there are many small pie slices)-->
  </data_labels>

  <group>
    <percent><?php
      echo isset($_GET['group_percent']) ? $_GET['group_percent'] : 0;
      ?></percent>                                       <!-- [0] (Number) if the calculated percent value of a slice is less than specified here, and there are more than one such slices, they can be grouped to "The others" slice-->
    <color></color>                                           <!-- [] (hex color code) color of "The others" slice -->
    <title></title>                                           <!-- [Others] title of "The others" slice -->
    <url></url>                                               <!-- [] url of "The others" slice -->
    <description></description>                               <!-- [] description of "The others" slice -->
    <pull_out></pull_out>                                     <!-- [false] (true / false) whether to pull out the other slice or not -->
  </group>

  <background>                                                <!-- BACKGROUND -->
    <color></color>                                           <!-- [#FFFFFF] (hex color code) -->
    <alpha></alpha>                                           <!-- [0] (0 - 100) use 0 if you are using custom swf or jpg for background -->
    <border_color></border_color>                             <!-- [#FFFFFF] (hex color code) -->
    <border_alpha></border_alpha>                             <!-- [0] (0 - 100) -->
    <file></file>                                             <!-- [] (filename) swf or jpg file of a background. Do not use progressive jpg file, it will be not visible with flash player 7 -->
                                                              <!-- The chart will look for this file in path folder (path is set in HTML) -->
  </background>

  <balloon>                                                   <!-- BALLOON -->
    <enabled></enabled>                                       <!-- [true] (true / false) -->
    <color></color>                                           <!-- [] (hex color code) balloon background color. If empty, slightly darker then current slice color will be used -->
    <alpha>80</alpha>                                         <!-- [80] (0 - 100) -->
    <text_color></text_color>                                 <!-- [0xFFFFFF] (hex color code) -->
    <text_size></text_size>                                   <!-- [text_size] (Number) -->
    <show>
       <![CDATA[{title}: {value} ({percents}%)]]>              <!-- [] ({value} {title} {percents}) You can format any data label: {value} - will be replaced with value and so on. You can add your own text or html code too. -->
    </show>
  </balloon>

  <legend>                                                    <!-- LEGEND -->
    <enabled></enabled>                                       <!-- [true] (true / false) -->
    <x><?php echo isset($_GET['legend_x_position']) ? $_GET['legend_x_position'] : 50; ?></x>                                                   <!-- [40] (Number) -->
    <y><?php echo isset($_GET['legend_y_position']) ? $_GET['legend_y_position'] : 30; ?></y>                                                   <!-- [] (Number) if empty, will be below the pie -->
    <width></width>                                           <!-- [] (Number) if empty, will be equal to flash width-80 -->
    <color>#FFFFFF</color>                                    <!-- [#FFFFFF] (hex color code) background color -->
    <max_columns>1</max_columns>                               <!-- [] (Number) the maximum number of columns in the legend -->
    <alpha>0</alpha>                                          <!-- [0] (0 - 100) background alpha -->
    <border_color>#000000</border_color>                      <!-- [#000000] (hex color code) border color -->
    <border_alpha>0</border_alpha>                           <!-- [0] (0 - 100) border alpha -->
    <text_color></text_color>                                 <!-- [text_color] (hex color code) -->
    <text_size></text_size>                                   <!-- [text_size] (Number) -->
    <spacing>9</spacing>                                      <!-- [10] (Number) vertical and horizontal gap between legend entries -->
    <margins></margins>                                      <!-- [0] (Number) legend margins (space between legend border and legend entries, recommended to use only if legend border is visible or background color is different from chart area background color) -->
    <key>                                                     <!-- KEY (the color box near every legend entry) -->
      <size>16</size>                                         <!-- [16] (Number) key size-->
      <border_color></border_color>                           <!-- [] (hex color code) leave empty if you don't want to have border -->
    </key>
  </legend>

  <strings>
    <no_data></no_data>                                       <!-- [No data for selected period] (text) if data is missing, this message will be displayed -->
    <export_as_image></export_as_image>                       <!-- [Export as image] (text) text for right click menu -->
    <collecting_data></collecting_data>                       <!-- [Collecting data] (text) this text is displayed while exporting chart to an image -->
  </strings>

  <?php if (isset($_GET['graph_title'])): ?>

    <labels>
      <label>
        <x>0</x>
        <y>10</y>
        <text_color>#000000</text_color>
        <align><?php echo isset($_GET['title_align']) ? $_GET['title_align'] : 'center'; ?></align>
        <text_size>14</text_size>
        <text><![CDATA[<b><?php echo $_GET['graph_title']; ?></b>]]></text>
      </label>
    </labels>

  <?php endif; ?>

</settings>
