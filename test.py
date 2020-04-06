from selenium import webdriver
driver = webdriver.Chrome('C:\\Users\\mi\\Desktop\\са1т2\\chromedriver_win32\\chromedriver.exe')
EMAIL = "zenit1032@gmail.com"
def firstTest() :
      open()
      driver.find_element_by_id("email").send_keys(EMAIL)
      driver.find_element_by_id("pas").send_keys("12345")
      driver.find_element_by_id("login").click()
      currentUrl = driver.current_url
      assert(currentUrl == ("https://eng-slang.000webhostapp.com/main.php")), "Oh no! This assertion failed!"
      print ("OK")
      
def open() :
      driver.get("https://eng-slang.000webhostapp.com/")
      driver.maximize_window()
firstTest()


