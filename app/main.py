from fastapi import FastAPI
from facebookscrapper import FacebookPostsScraper as Fps
import uvicorn
app=FastAPI()
from pprint import pprint as pp

# Enter your Facebook email and password
email = 'elwaermarah@gmail.com'
password = '211197991mA'
fps = Fps(email, password, post_url_text='Full Story')
# Instantiate an object

# Example with single profile
single_profile = 'https://www.facebook.com/nytimes'
data = fps.get_posts_from_profile(single_profile)

pp(data)
import pandas as pd
#fps.posts_to_csv('my_posts')  # You can export the posts as Excel document
#df= pd.read_csv(r"C:\Users\marah\Desktop\app\my_posts.csv")
#print(df)

#fps.posts_to_excel('my_posts')  # You can export the posts as Excel document
# fps.posts_to_json('my_posts')  # You can export the posts as JSON document
#df= pd.read_csv(r"C:\Users\marah\Desktop\app\my_posts.csv")

#fps.posts_to_csv('my_posts')  # You can export the posts as Excel document

@app.get("/{cat}")
async def read_item(cat):
    return fps.get_posts_from_profile(cat)
if __name__ == "__main__":
    uvicorn.run("main:app", port=8000, reload=True)
