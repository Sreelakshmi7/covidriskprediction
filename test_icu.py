import pandas as pd

df = pd.read_csv('test.csv')

import pickle

scaler = pickle.load(open('icu_scaler.sav', 'rb'))
df = scaler.transform(df)

print('svm')
clf_svm = pickle.load(open('icu_svm.sav','rb'))
print(clf_svm.predict(df))

print('random forest')
clf_rf = pickle.load(open('icu_rf.sav','rb'))
print(clf_rf.predict(df))

print('logistic regression')
clf_lr = pickle.load(open('icu_lr.sav','rb'))
print(clf_lr.predict(df))

print('XGB')
clf_xgb = pickle.load(open('icu_xgb.sav','rb'))
print(clf_xgb.predict(df))
